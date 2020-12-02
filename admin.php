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
        <li><a href="admin.php">Admin</a></li>

			  
			  <?php

            # Stop Hacking attempt
            define('__APP__', TRUE);

            # Database connection
            include("dbconn.php");

            session_start();

              if (isset($_SESSION['username'])){

                print'<li>
                  <a class="nav-link" href="odjava.php">Odjava</a>
                  </li>';
              }
            ?>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Internet history</h1>
		<?php
        
            if ($_SESSION['user']['valid'] == 'true' && ($_SESSION['user']['role'] == 'admin' || $_SESSION['user']['role'] == 'editor')){

              echo "<h2 style='margin-left:25px;'>Admin ili Editor</h2>";
              print'<div class="card card-outline-secondary" style="margin:20px; width:90%">
                    <div class="card-header">
                      <h3 class="mb-0">Dodaj novi članak</h3>
                    </div>
                    <div class="card-body">
                      <form action="dodaniclanak.php" method="POST" enctype="multipart/form-data" class="form" role="form">
                        <div class="form-group">
                          <label for="naslov">Naziv članka</label> 
                          <input class="form-control" name="naslov" id="naslov" placeholder="Naziv članka" type="text">
                        </div>
                        <div class="form-group">
                          <label for="kratkiOpis">Kratki opis - 100 znakova</label> 
                          <input class="form-control" name="kratkiOpis" id="kratkiOpis" placeholder="Kratki opis članka" type="text">
                        </div>
                        <div class="form-group">
                              <label for="tekst">Sadržaj članka</label>
                              <textarea class="form-control" id="tekst" name="tekst" rows="6"></textarea>
                        </div>
                        
                        <input type="file" name="file" id="file">
                        <div class="form-group">
                          <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button>
                        </div>
                      </form>
                    </div>
                  </div>';

            }
            else if($_SESSION['user']['valid'] == 'true'){
              echo "<h2>Normalan korisnik - pristup zabranjen</h2>";
            }
            else{
              echo "<h2 >Niste registrirani</h2>";
            }


        ?>
		
		
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>