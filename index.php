<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SER. Typewriters</title>
	<meta name="author" content="Group_NL - Dalbir Singh, Natalia Selestrini Dias, Samir K C, Sergio Cutrim Gouveia" />
	<meta name="description" content="Project 1 (Micro-Site)">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/styles.css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
	<header>
		<img src="images/logo.png" alt="Logo SER.">
		<div>
			<h1>SER.</h1>
			<h2>Typewriters</h2>
		</div>
	</header>
	<div id="navbar">
		<?php
		include 'includes/global-nav.php';
		?>
	</div>

	<main>
		<div class="imgHome">
			<img src="images/cover.png" alt="Product Typewriter 1" style="width: 100%; height: auto;">
		</div>

		<div class="aboutProduct">
			<div class="divAdj">
				<p class="adj">PRACTICAL</p>
				<p class="adj">TIMELESS</p>
				<p class="adj">HIGH-QUALITY</p>
			</div>

			<p>Welcome to our typewriter emporium, where timeless elegance meets practical functionality. Crafted with
				precision and built to last, our collection boasts a range of classic and vintage models,
				each exuding its own unique charm and character. Whether you're a seasoned writer seeking inspiration
				from the nostalgia of clacking keys or a modern enthusiast looking to add a touch of retro flair to your
				workspace, our carefully curated selection offers something for everyone. Rediscover the joy of tactile
				typing and indulge in the simplicity of analog craftsmanship with our exquisite typewriters. Browse our
				inventory today and embark on a journey back in time with a timeless writing companion that stands the
				test of time.</p>
		</div>

		<div class="products">
			<div>
				<img src="images/1.png" alt="Product Typewriter 1">
				<p>Typewriter 1</p>
				<p class="price">$ 100.00</p>
			</div>
			<div>
				<img src="images/2.png" alt="Product Typewriter 2">
				<p>Typewriter 2</p>
				<p class="price">$ 100.00</p>
			</div>
			<div>
				<img src="images/3.png" alt="Product Typewriter 3">
				<p>Typewriter 3</p>
				<p class="price">$ 150.00</p>
			</div>
			<div>
				<img src="images/4.png" alt="Product Typewriter 4">
				<p>Typewriter 4</p>
				<p class="price">$ 200.00</p>
			</div>
			<div>
				<img src="images/5.png" alt="Product Typewriter 5">
				<p>Typewriter 5</p>
				<p class="price">$ 150.00</p>
			</div>
			<div>
				<img src="images/6.png" alt="Product Typewriter 6">
				<p>Typewriter 6</p>
				<p class="price">$ 250.00</p>
			</div>
			<div>
				<img src="images/7.png" alt="Product Typewriter 7">
				<p>Typewriter 7</p>
				<p class="price">$ 100.00</p>
			</div>
			<div>
				<img src="images/8.png" alt="Product Typewriter 8">
				<p>Typewriter 8</p>
				<p class="price">$ 200.00</p>
			</div>
			<div>
				<img src="images/9.png" alt="Product Typewriter 9">
				<p>Typewriter 9</p>
				<p class="price">$ 350.00</p>
			</div>
			<div>
				<img src="images/10.png" alt="Product Typewriter 10">
				<p>Typewriter 10</p>
				<p class="price">$ 200.00</p>
			</div>
			<div>
				<img src="images/11.png" alt="Product Typewriter 11">
				<p>Typewriter 11</p>
				<p class="price">$ 150.00</p>
			</div>
			<div>
				<img src="images/12.png" alt="Product Typewriter 12">
				<p>Typewriter 12</p>
				<p class="price">$ 250.00</p>
			</div>
		
			</div>

		<div class="feedback">
			<div class="feedback1">
				<img class="feedbackImg" src="images/1.png" alt="Product">
				<div>
					<img src="images/stars.png" alt="Product's Rate">
					<p class="feedbackText">"Absolutely thrilled with my new typewriter! It brings back the charm of
						old-school writing, and the quality is impeccable. Thank you!"</p>
					<p class="feedbackProdUser">Typewriter 1 | Lucas Mota</p>
				</div>
			</div>
			<div class="feedback2">
				<img class="feedbackImg" src="images/2.png" alt="Product">
				<div>
					<img src="images/stars.png" alt="Product's Rate">
					<p class="feedbackText">"I can't express how much joy this typewriter has brought into my life. The
						sound of its keys tapping away is music to my ears. Such a beautiful addition to my writing
						space. Highly recommended!"</p>
					<p class="feedbackProdUser">Typewriter 2 | Marcos Picossi</p>
				</div>
			</div>
		</div>
	
	</main>

	<footer>
		<?php
		include 'includes/footer-nav.php';
		?>
	</footer>
</body>

</html>