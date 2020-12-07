<?php
session_start();
define('__APP__', TRUE);
include ("dbconn.php");
if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

?>
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		<title>Example page - News</title>
	</head>
<body>
	
<header>
		<div class="hero-image"></div>
		<nav>
			<ul>
			  <li><a href="index.php">Početna</a></li>
			  <li><a href="news.php">News</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about-us.php">About</a></li>
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
		<h1>NEWS</h1>
		<div class="news">
		<?php
        
		if ($_SESSION['user']['valid'] == 'true' ){
			$query  = "SELECT * FROM vijest";
				
				$result = @mysqli_query($conn, $query);
				while($row = @mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					print '
					<div class="news">
						<img src="' . $row['slikaPath'] . '" alt="' . $row['naslov'] . '" naslov="' . $row['naslov'] . '">
						<h2>' . $row['naslov'] . '</h2>';
						echo strip_tags($row['kratkiOpis']);
						}}
			else{
				echo "<h2 >Niste prijavljeni</h2>";
		}
			  
			
		
			  ?>
			</div>
	</main>
	<footer>
		<p>Copyright &copy; 2020 Filip Kotur</p>
	</footer>
</body>
</html>