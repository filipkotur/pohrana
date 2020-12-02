
<?php
session_start();
define('__APP__', TRUE);
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
			  <li><a href="registration.php">Registracija</a></li>
			  <?php

            # Stop Hacking attempt

            # Database connection


			if (isset($_SESSION['username'])){

                print'<li class="nav-item">
                  <a class="nav-link" href="odjava.php">Odjava</a>
                  </li>';
              }
            ?>
			</ul>
		</nav>
	</header>
	<main>
    <div id="contact">
	<h1>Prijava</h1>
	<?php
	        $_POST['_action_'] = TRUE;  
			$query  = "SELECT * FROM korisnik WHERE username='" .  $_POST['username'] . "'";
			$result = @mysqli_query($conn, $query);
			$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (password_verify($_POST['password'], $row['password'])) {
				$_SESSION['user']['valid'] = 'true';
				$_SESSION['user']['id'] = $row['id'];
				$_SESSION['user']['ime'] = $row['ime'];
				$_SESSION['user']['prezime'] = $row['prezime'];
				$_SESSION['user']['role'] = $row['role'];
				#$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['ime'] . ' ' . $_SESSION['user']['prezime'] . '</p>';
				print ' <h2>Ulogirani ste</h2>';
				#header("Location: index.php");
			}

			# Bad username or password
			else {
				print ' <h2>Krivi podaci</h2>';
                $_POST['_action_'] = FALSE;      
				unset($_SESSION['user']);
				$_SESSION['message'] = '<p>Krivi podaci!</p>';
				echo "neispravni podaci";

				//header("Location: prijava.php");
			}
		
		
		
			?>
			</div>
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>