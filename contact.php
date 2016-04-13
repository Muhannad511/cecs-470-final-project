#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>David Lopez - Contact</title>
	<link href="style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<h1>DAVID LOPEZ PHOTOGRAPHY</h1>
		<h2>CONTACT ME</h2>

		<hr>
	<nav>
		<a href = "index.html">Home</a>
		<a href = "gallery.php">Gallery</a>
		<a href = "contact.php">Contact</a>
	</nav>
	</header>

	<div class="content">
		<h1>Need to Reach Me?</h1>

		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="contactForm">
			<fieldset>
				<legend>Fill in the following fields</legend>
				<label for="name">Name: </label><br><input type="text" name="name" id="name"><br>
				<label for="email">Email: </label><br><input type="text" name="email" id="email"><br>
				<label for="comment">Comment:</label><br><textarea name="comment" form="contactForm"></textarea><br>
				<input type="submit" id="submit" value="Send!">
			</fieldset>
		</form>
  </div>

  <footer>
		Latest Update: <?php echo date ("F d Y H:i:s.", getlastmod()); ?>
		<br>
		<a href=mailto:email@email.com >email@email.com</a>
		<br>
	</footer>
</body>
</html>
