<?php
	$h1 = "Unternehmen";
	$breadcrumb = array("Home" => "index.php",
											"Unternehmen" => "unternehmen.php");
	include("header.php");
?>
	<div class="content produkte grid">
		<div class="block grid__item one-whole bp-large--one-third">
			<h2 class="headline">Unternehmen</h2>
			<p class="b-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam mollitia amet quasi eos ipsam voluptate sunt laborum accusantium obcaecati autem ut reprehenderit hic placeat odio earum aliquid pariatur fugiat libero.</p>
		</div><!--
		 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third systemprodukt">
			<h3 class="headline"><a href="produkte_kor_01.php">Leistung</a></h3>
			<figure>
				<a class="noarr" href="#"><img src="images/unternehmen/leistung.png" alt=""></a>
		</figure>
		</div><!--
		 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third systemprodukt">
			<h3 class="headline"><a href="#">Kompetenz</a></h3>
			<figure>
				<a class="noarr" href="#"><img src="images/unternehmen/kompetenz.png" alt=""></a>
			</figure>
		</div><!--
		 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third systemprodukt">
			<h3 class="headline"><a href="#">Geschäftsführung</a></h3>
			<figure>
				<a class="noarr" href="#"><img src="images/unternehmen/geschaeftsfuehrung.png" alt=""></a>
			</figure>
		</div><!--
		 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third systemprodukt">
			<h3 class="headline"><a href="#">Werkstatt</a></h3>
			<figure>
				<a class="noarr" href="#"><img src="images/unternehmen/werkstatt.png" alt=""></a>
			</figure>
		</div>
	</div>
<?php
	include("footer.php");
?>