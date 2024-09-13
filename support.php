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
		<div class="container">
			<div class="form-container">
				<form id="myForm" action="submit.php" method="post">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" required>

					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required>

					<label for="phone">Phone Number:</label>
					<input type="tel" id="phone" name="phone" required>

					<label for="product">Product:</label>
					<select id="product" name="product" required>
						<option value="">Select Product</option>
						<option value="Typewriter 1">Typewriter 1</option>
						<option value="Typewriter 2">Typewriter 2</option>
						<option value="Typewriter 3">Typewriter 3</option>
						<option value="Typewriter 4">Typewriter 4</option>
						<option value="Typewriter 5">Typewriter 5</option>
						<option value="Typewriter 6">Typewriter 6</option>
						<option value="Typewriter 7">Typewriter 7</option>
						<option value="Typewriter 8">Typewriter 8</option>
						<option value="Typewriter 9">Typewriter 9</option>
						<option value="Typewriter 10">Typewriter 10</option>
						<option value="Typewriter 11">Typewriter 11</option>
						<option value="Typewriter 12">Typewriter 12</option>
					</select>

					<label for="subject">Subject:</label>
					<input type="text" id="subject" name="subject" required>

					<label for="message">Message:</label>
					<textarea id="message" name="message" rows="4" required></textarea>

					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="support-img">
				<img src="images/SUPPORT.jpg" rel="supportimage">
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