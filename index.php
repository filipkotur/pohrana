<?php
define('__APP__', TRUE);
session_start();

include ("dbconn.php");
if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
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
			  <li><a href="login.php">Prijava</a></li>
			  <li><a href="registracija.php">Registracija</a></li>
			  <li><a href="admin.php">Admin</a></li>

			  <?php
            
			if ($_SESSION['user']['valid'] == 'true') {
				{

                print'<li >
                  <a class="nav-link" href="odjava.php">Odjava</a>
                  </li>';
              }}
            ?>
			</ul>
		</nav>
	</header>
	<main>
	
		<h1>Internet history</h1>
		<figure>
			<img src="img/slika1.jpg" alt="HTML5" title="HTML5">
			<figcaption>Vizualizacija količine puteva na internetu.</figcaption>
		</figure>
		<p> Internet ili međumrežje, javno dostupna globalna podatkovna mreža koja zajedno povezuje računala i računalne mreže korištenjem istoimenog protokola (internetski protokol = IP). 
			To je "mreža svih mreža" koja se sastoji od milijuna kućnih, akademskih, poslovnih i vladinih mreža koje međusobno razmjenjuju informacije i usluge kao što su elektronička pošta, chat i prijenos datoteka te povezane stranice i dokumente World Wide Weba.

		</p>
		
		<p>Source: <a href="https://en.wikipedia.org/wiki/Internet" target="_blank">wikipedia</a></p>
		<!-- <p>Social media:<br>
			
			<a href="https://en.wikipedia.org/wiki/Internet" target="_blank"><img src="img/wikipedia.jpg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			
		</p> -->
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>