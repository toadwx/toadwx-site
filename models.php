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
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RSM7VS8CPV"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-RSM7VS8CPV');
  </script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <script type="text/javascript">
  window.region = "CONUS"
  window.id = "img" + window.region
  window.path = "./images/gfs/temp2m/" + window.region + "/"
  	$(document).ready(function(){
		$('#regions').on('change', function(){
			window.region = $(this).val();
		    $("div.plot").hide();
		    $("div.plotCONUS").hide();
		    $("#show"+window.region).show();
		  window.id = "img" + window.region
		  window.path = "./images/gfs/temp2m/" + window.region + "/"
		});
	});
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
	<li><a href="sfcobs.php"><b>Surface Obs</b></a></li>
	<li><a href="models.php" class="active"><b>Models</b></a></li>
	<li><a href="about.php"><b>About</b></a></li>
	
	</div>
	</ul>
	</nav>

	<div class="main">
		<h1>The Model Page</h1>
		<p>Latest* GFS 2-meter Temperature Maps (*automation coming soon!)
		<br>More to come later...just a taste for now!</p>
		<br>
		
		<!-- Selection menu -->
		<select id="regions" class="region">
		    <option value="CONUS">CONUS</option>
    		<option value="NE">Northeast</option>
    		<option value="SE">Southeast</option>
    		<option value="MW">Midwest</option>
    		<option value="NP">Northern Plains</option>
    		<option value="SP">Southern Plains</option>
    		<option value="NW">Northwest</option>
    		<option value="SW">Southwest</option>
		</select>
		<br>
		
		<div id="showCONUS" class="plotCONUS">
    	<img id="imgCONUS" class="model-plot">
    </div>
    <div id="showNE" class="plot">
    	<img id="imgNE" class="model-plot">
    </div>
    <div id="showSE" class="plot">
    	<img id="imgSE" class="model-plot">
    </div>
    <div id="showMW" class="plot">
    	<img id="imgMW" class="model-plot">
    </div>
    <div id="showNP" class="plot">
    	<img id="imgNP" class="model-plot">
    </div>
    <div id="showSP" class="plot">
    	<img id="imgSP" class="model-plot">
    </div>
    <div id="showNW" class="plot">
    	<img id="imgNW" class="model-plot">
    </div>
    <div id="showSW" class="plot">
    	<img id="imgSW" class="model-plot">
    </div>
   	<br><br>
   	<input id="valR" type="range" min="0" max="8" value="0" step="1" class="slider" oninput="showVal(this.value)" onchange="showVal(this.value)" />
	</div>
	
	<script type="text/javascript">
  var val = document.getElementById("valR").value;
  //var id = "img" + window.region
  //var path = "./images/gfs/temp2m/" + window.region + "/"
  		if (val < 10) {
      	document.getElementById(window.id).src = window.path + "step_0" + val + ".png";
      } else {
      	document.getElementById(window.id).src = window.path + "step_" + val + ".png";
      }
      function showVal(newVal){
      	if (newVal < 10) {
        document.getElementById(window.id).src = window.path + "step_0" + newVal + ".png";
        } else {
        	document.getElementById(window.id).src = window.path + "step_0" + newVal + ".png";
        }
      }
  </script>


</body>

</html>
