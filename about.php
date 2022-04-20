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
	<li><a href="models.php"><b>Models</b></a></li>
	<li><a href="about.php" class="active"><b>About</b></a></li>
	
	</div>
	</ul>
	</nav>

	<div class="main">
		<h1>About ToadWx</h1>
		<div class="about">
		<p>ToadWx is an ongoing project designed to display meterological observation and model data in a simple way. This site is being actively developed and maintained by Matthew Toadvine. As such, updates are expected to be frequent, so check back frequently!<br>Matthew Toadvine is a follower of Jesus, husband, and father. He is currently finishing his Master's Thesis at UNC Charlotte, focusing on the climatological and environmental differences between East and Gulf coast tropical cyclone-induced tornadoes.</p>
		<img src="images/misc/toadvine-family.jpg"/>
		</div>
	</div>


</body>

</html>
