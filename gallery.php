#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>David Lopez - Gallery</title>
	<link href="style.css" rel="stylesheet">
	<script type="text/JavaScript" src="script.js"></script>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<h1>DAVID LOPEZ PHOTOGRAPHY</h1>
		<h2>GALLERY</h2>

	<nav>
		<a href = "index.html">Home</a>
		<a href = "services.html">Services</a>
		<a class="active" href = "gallery.php">Gallery</a>
		<a href = "contact.php">Contact</a>
	</nav>
	</header>

	<div class="content">
		<h1>Some of My Work</h1>
		<p>Some stuff goes here.</p>
  </div>

  <footer>
		Latest Update: <?php echo date ("F d Y H:i:s.", getlastmod()); ?>
    <br>
  	<a href=mailto:email@email.com >email@email.com</a>
  	<br>
  </footer>
</body>
</html>
