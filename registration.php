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
			  <li><a href="about-us.php">About</a></li>
			  <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="login.php">Prijava</a></li>
			  <li><a href="registracija.php">Registracija</a></li>
			  
			  <?php

            # Stop Hacking attempt
            define('__APP__', TRUE);

            # Database connection
            include("dbconn.php");

            session_start();

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
		<h1>Registracija korisnika</h1>
        <?php

                        if (!defined('__APP__')) define('__APP__', TRUE);



                        $query  = "SELECT * FROM korisnik WHERE email='" .  $_POST['email'] . "' OR username='" .  $_POST['username'] . "'";
                        $result = @mysqli_query($conn, $query);
                        $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $broj_redaka = mysqli_num_rows($result);
                        if ($broj_redaka == 0) {
                            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            $query  = "INSERT INTO korisnik (ime, prezime, email, username, password) VALUES ('" . $_POST['ime'] . "', '" . $_POST['prezime'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "')";
                            if (mysqli_query($conn, $query)) {
                                echo '<h2> zahvaljujem na registraciji</h2>
                                    <hr>';
                                    $_POST['_action_'] = TRUE;  
                            } else {
                                echo "Error: " . $sql . "" . mysqli_error($conn);
                            }
                        } else {
                            echo  '<h2>korisnik je već prijavljen bazi podataka!</h2>';
                        }



                        ?>
                           
	
</body>
</html>