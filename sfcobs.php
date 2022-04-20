<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
    
	<title>ToadWx</title>
	<link rel="icon" href="favicon.png">
	
	<?php
    $filename = 'style.css';
    $filemtime = filemtime($filename);
    echo "<link href='".$filename."?".$filemtime."' rel='stylesheet'>";
    ?>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$('#regions').on('change', function(){
			var demovalue = $(this).val(); 
		    $("div.plot").hide();
		    $("div.plotCONUS").hide();
		    $("#show"+demovalue).show();
		});
	});
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RSM7VS8CPV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RSM7VS8CPV');
    </script>
</head>

<body>
	
	<!-- Create a responsive navigation bar -->
	<nav class="navbar">
	
	<!-- Logo -->
	<div class="logo"><a href="index.php"><img src="images/logos/toadwx_logo.png" class="logo-img"></a></div>
	
	<ul class="nav-links">	
	<!-- Using Checkbox Hack -->
	<input type="checkbox" id="checkbox_toggle" />
	<label for="checkbox_toggle" class="hamburger">&#9776;</label>
	
	<!-- Navigation Menus -->

	<div class="menu">
	<li><a href="index.php"><b>Home</b></a></li>
	<li><a href="sfcobs.php" class="active"><b>Surface Obs</b></a></li>
	<li><a href="models.php"><b>Models</b></a></li>
	<li><a href="about.php"><b>About</b></a></li>
	
	</div>
	</ul>
	</nav>

	<div class="main">
		<h1>Surface Observations</h1> 
		<p>Choose your region of interest below.</p><br>
		
		<select id="regions" class="region">
		    <option value="CONUS">CONUS</option>
    		<option value="NE">Northeast</option>
    		<option value="SE">Southeast</option>
    		<option value="MW">Midwest</option>
    		<option value="NP">Northern Plains</option>
    		<option value="SP">Southern Plains</option>
    		<option value="NW">Northwest</option>
    		<option value="SW">Southwest</option>
    		<option value="AK">Alaska</option>
    		<option value="HI">Hawaii</option>
		</select>
		
		<br>
		
		<div id="showCONUS" class="plotCONUS">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-CONUS.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showNE" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-NE.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showSE" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-SE.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showMW" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-MW.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showNP" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-NP.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showSP" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-SP.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showNW" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-NW.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showSW" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-SW.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showAK" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-AK.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>
        
        <div id="showHI" class="plot">
		<!-- Use PHP to force the updated image, bypassing the browser's cache -->
		<?php
        $filename = 'images/sfcobs/metar-HI.png';
        $filemtime = filemtime($filename);
        echo "<img src='".$filename."?".$filemtime."' class='map'>";
        ?>
        </div>

	</div>


</body>

</html>
