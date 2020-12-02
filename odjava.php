
<?php
	# Stop Hacking attempt
    define('__APP__', TRUE);
	include("dbconn.php");

	# Start session
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>
		
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
		<link rel="stylesheet" href="style.css">
		
		<title>Internet.hr</title>
	</head>
<body>
	<header>
		<div class="hero-image"></div>
		<nav>
			<ul>
			  <li><a href="index.php">Početna</a></li>
			  <li><a href="news.php">News</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about-us.html">About</a></li>
			  <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="login.php">Gallery</a></li>
			  <li><a href="registracija.php">Gallery</a></li>
			  <li><a href="admin.php">Admin</a></li>

			
			</ul>
		</nav>
	</header>
	<main>
		<h1>Internet history</h1>
        <?php

          

            unset($_POST);
            unset($_SESSION['user']);

            $_SESSION['user']['valid'] = 'false';

            print '<h2>Odjavljeni ste!</h2>';
?>
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>