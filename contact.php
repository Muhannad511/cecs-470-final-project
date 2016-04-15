#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>David Lopez - Contact</title>
	<link href="style.css" rel="stylesheet">
	<script type="text/JavaScript" src="script.js"></script>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<h1>DAVID LOPEZ PHOTOGRAPHY</h1>
		<h2>CONTACT ME</h2>

	<nav>
		<a href = "index.html">Home</a>
		<a href = "services.html">Services</a>
		<a href = "gallery.php">Gallery</a>
		<a class="active" href = "contact.php">Contact</a>
	</nav>
	</header>


<div class="content">
<?php
	$action=$_REQUEST['action'];
	if ($action==""){ ?>
			<h1>Need to Reach Me?</h1>
			<form method="POST" action="" id="contactForm" enctype="multipart/form-data">
				<input type="hidden" name="action" value="submit">
				<fieldset>
					<legend>Fill in the following fields</legend>
					<label for="name">Name: </label><br><input type="text" name="name" id="name"><br>
					<label for="email">Email: </label><br><input type="text" name="email" id="email"><br>
					<label for="comment">Comment:</label><br><textarea name="comment" form="contactForm"></textarea><br>
					<input type="submit" id="submit" value="Send!">
				</fieldset>
			</form>
	<?php }
	else{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$comment=$_REQUEST['comment'];
		if (($name=="")||($email=="")||($comment==""))
		{
			echo "All fields are required";
		}
		else {
			$to="";
			$message = "Message from " . $name . ": " . $comment;
			$subject="Message Left at David Lopez Photography";
			mail($to, $subject, $message, $email);
			echo "<h1>Message sent!</h1><br>";
			echo "<p>I will get back to you as soon as I can.</p>";
		}
	}
	?>
	</div>

  <footer>
		Latest Update: <?php echo date ("F d Y H:i:s.", getlastmod()); ?>
		<br>
		<a href=mailto:email@email.com >email@email.com</a>
		<br>
	</footer>
</body>
</html>
