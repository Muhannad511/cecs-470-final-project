#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>David Lopez - Gallery</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<header>
		<h1>David Lopez Photography</h1>
		<h2>Gallery</h2>

		<hr>
	<nav>
		<a href = "index.html">Home</a>
		<a href = "gallery.php">Gallery</a>
		<a href = "contact.php">Contact</a>
	</nav>
	</header>

  <div>

  </div>

  <footer>
		Latest Update: <?php echo date ("F d Y H:i:s.", getlastmod()); ?>
    <br>
  	<a href=mailto:email@email.com >email@email.com</a>
  	<br>
  </footer>
</body>
</html>
