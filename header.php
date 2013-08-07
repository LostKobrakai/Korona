<!doctype html>
<!--[if lt IE 9]><html  lang="de" class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html lang="de"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Korona</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php"><img src="images/logo.png"></a>
		</div><nav class="mainnav">
			<ul class="nav">
				<li><a href="produkte.php">Produkte</a>
				<li><a href="">Referenzen</a>
				<li><a href="">Unternehmen</a>
				<li><a href="">Kontakt</a>
			</ul>
		</nav>
		<div class="teaser">
			<?php if(!isset($teaser)) : ?>
			<img src="images/header.jpg" alt="">
			<?php else : ?>
			<img src="<?php echo $teaser; ?>" alt="">
			<?php endif; ?>
			<h1><?php echo $h1; ?></h1>
		</div>
		<ul class="nav breadcrumb">
			<?php
			foreach($breadcrumb as $key => $value){
				echo "<li><a href='$value'>$key</a>";
			}
			?>
		</ul>
	</header>