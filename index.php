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
			<li class="nav-item"><a href="index.php" class="nav-link active"><b>Home</b></a></li>
			<li class="nav-item"><a href="sfcobs.php" class="nav-link"><b>Surface Obs</b></a></li>
			<li class="nav-item"><a href="models.php" class="nav-link"><b>Models</b></a></li>
			<li class="nav-item"><a href="about.php" class="nav-link"><b>About</b></a></li>
		</ul>
	</div>

	<div class="main">
		<h1>Welcome to ToadWx!</h1>
		<p>This site is currently under construction.<br> Please check back later.</p>
	</div>


</body>

</html>
