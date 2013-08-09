<!doctype html>
<!--[if lt IE 9]><html  lang="de" class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html lang="de"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Korona</title>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="images/favicon_16.png" type="image/png">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php" title="Startseite"><img src="images/logo.png" alt="Logo von Korona"></a>
		</div><nav class="mainnav">
			<ul class="nav">
				<li><a href="produkte.php">Produkte</a>
				<li><a href="referenzen.php">Referenzen</a>
				<li><a href="unternehmen.php">Unternehmen</a>
				<li><a href="kontakt.php">Kontakt</a>
			</ul>
		</nav>
		<div class="teaser<?php echo $teaserclass; ?>">
			<?php if(!isset($teaser)) : ?>
			<img src="images/startseite/startseite_head.jpg" alt="">
			<?php else : ?>
			<img src="<?php echo $teaser; ?>" alt="">
			<?php endif; ?>
			<h1 <?php if($hideh1) echo "class='is-vishidden'"; ?>><?php echo $h1; ?></h1>
		</div>
		<ul class="nav breadcrumb <?php if($hidebreadcrumb) echo "is-vishidden"; ?>">
			<?php
			foreach($breadcrumb as $key => $value){
				echo "<li><a href='$value'>$key</a>";
			}
			?>
		</ul>
	</header>