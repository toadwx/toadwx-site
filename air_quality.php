<html>
    <head>
        <?php include("header.php");?>
    </head>
    <body>
        <?php include("navbar.php");?>
        
        <div class="app-container">
            <h3>Air Quality</h3>
            <div class="tab">
                <button id="defaultTabButton" class="tablinks active" onclick="openTab(event, 'pm25Container')">PM 2.5</button>
                <button class="tablinks" onclick="openTab(event, 'pm10Container')">PM 10</button>
            </div>
            <div id="pm25Container" class="tabcontent" style="display:block">
                <div id="pm25Chart"></div>
            </div>
            <div id="pm10Container" class="tabcontent">
                <div id="pm10Chart"></div>
            </div>
        </div>
        <br/>
    
        <?php include("footer.php");?>
        
        <script type="text/javascript" src="js/purpleAir.js"></script>
    </body>
</html>