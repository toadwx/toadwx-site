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
	<li><a href="index.php" class="active"><b>Home</b></a></li>
	<li><a href="sfcobs.php"><b>Surface Obs</b></a></li>
	<li><a href="models.php"><b>Models</b></a></li>
	<li><a href="about.php"><b>About</b></a></li>
	
	</div>
	</ul>
	</nav>

	<div class="main">
		<h1>Welcome to ToadWx!</h1>
		<p>This site is currently under construction.<br> Please check back soon.</p>
	</div>


</body>

</html>
