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
    
</head>

<body>
	
	<!-- Create a navigation bar to keep on each page of the website -->
	<div class="fixed-top">
		<ul class="navbar">
			<li class="nav-item"><a href="index.php" class="brand"><img src="images/logos/toadwx_logo.png" class="logo"></a></li>
			<li class="nav-item"><a href="index.php" class="nav-link"><b>Home</b></a></li>
			<li class="nav-item"><a href="sfcobs.php" class="nav-link"><b>Surface Obs</b></a></li>
			<li class="nav-item"><a href="models.php" class="nav-link active"><b>Models</b></a></li>
			<li class="nav-item"><a href="about.php" class="nav-link"><b>About</b></a></li>
		</ul>
	</div>

	<div class="main">
		<h1>Welcome to ToadWx!</h1>
		<p>Here is a sample of a local WRF run<br>More to come later!</p>
		<!---<img src="images/models/refl.gif?<php echo filemtime( $file ); ?>" height="50%" width="50%">
		--->
    <input id="valR" type="range" min="1" max="24" value="1" step="1" class="slider" oninput="showVal(this.value)" onchange="showVal(this.value)" />
    <span id="range"></span><br>
    <img id="img" height="50%" width="50%">
	</div>
	
  <script>

  var val = document.getElementById("valR").value;
  		if (val < 10) {
      	document.getElementById("img").src = "./images/models/refl/step_0" + val + ".png";
      } else {
      	document.getElementById("img").src = "./images/models/refl/step_" + val + ".png";
      }
      function showVal(newVal){
      	if (newVal < 10) {
        document.getElementById("img").src = "./images/models/refl/step_0" + newVal + ".png";
        } else {
        	document.getElementById("img").src = "./images/models/refl/step_" + newVal + ".png";
        }
      }
  </script>


</body>

</html>
