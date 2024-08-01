<?php
    require("./cfg/config.php");
    $output = fopen('php://output', 'w');
    $startDate = $endDate = '';

    if (isset($_POST['startDate'])) $startDate = sanitizeString($_POST['startDate']);
    if (isset($_POST['startDate'])) $endDate = sanitizeString($_POST['endDate']);


    $startDate = new DateTime($startDate, new DateTimeZone('America/New_York'));
    $startDate = $startDate->format('U');
    
    $endDate = new DateTime($endDate, new DateTimeZone('America/New_York'));
    $endDate = $endDate->format('U');
    
    // Create connection
    $sql = new mysqli("mysql.brianmagiweatheruncc.dreamhosters.com", $username, $password, $database);
    
    $myquery = "SELECT * FROM archive WHERE dateTime BETWEEN $startDate AND $endDate";
        
    $result = $sql->query( $myquery ) or die ( "Sql error : " . $sql->connect_error );
    
    $filename = "mcwxData.csv";
    
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename=' . $filename);
    header("Content-Transfer-Encoding: UTF-8");
    
    echo "# MCENIRY WEATHER STATION DATA\n";
    echo "# DEPT OF GEOGRAPHY AND EARTH SCIENCE\n";
    echo "# UNIVERSITY OF NORTH CAROLINA AT CHARLOTTE\n";
    echo "# 9201 University City Blvd Charlotte NC 28223\n";
    echo "Timestamp,US Units,Reporting Interval,SLP,Absolute Pressure,Pressure,Inside Temp (F),Outside Temp (F),Inside Humidity (%),Outside Humidity(%),Wind Speed (kts),Wind Direction(deg),Wind Gust Speed (kts),Wind Gust Direction (deg),Rain Rate (in/hr),Rain(in),Dewpoint(F),Wind Chill,Heat Index,Evapotranspiration,Radiation,UV,extraTemp1,extraTemp2,extraTemp3,soilTemp1,soilTemp2,soilTemp3,soilTemp4,leafTemp1,leafTemp2,extraHumid1,extraHumid2,soilMoist1,soilMoist2,soilMoist3,soilMoist4,leafWet1,leafWet2,Reception(%),txBatteryStatus,consBatteryVoltage,hail,hailRate,heatingTemp,heatingVoltage,supplyVoltage,referenceVoltage,windBatteryStatus,rainBatteryStatus,outTempBatteryStatus,inTempBatteryStatus\n";

    while ($row = $result->fetch_assoc()) {
        $unixTime = $row['dateTime'];
        $tdat = new DateTime("@$unixTime");
        $tdat->setTimeZone(new DateTimeZone('America/New_York'));
        $newDate = $tdat->format('Y-m-d H:i:s');
        $row['dateTime'] = $newDate;
        fputcsv($output, $row);
        
    }

    function sanitizeString($var)
    {
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

    function sanitizeMySQL($connection, $var)
    {
        $var = $connection->real_escape_string($var);
        $var = sanitizeString($var);
        return $var;
    }
?>