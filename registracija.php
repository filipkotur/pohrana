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
			  <li><a href="about-us.php">About</a></li>
			  <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="login.php">Prijava</a></li>
			  <li><a href="registracija.php">Registracija</a></li>
			  <?php
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
    if ($_POST['_action_'] == FALSE) {
		print '
		                <form action="registration.php" method="POST"  class="form" role="form">
                        <table style="table-layout: fixed;width: 200px;" align="center">
                        <tr><td>
                                    <label for="ime">Ime</label></td></tr> <tr>
                        <td>
                                    <input class="form-control" name="ime" id="ime"  type="text"> </td></tr><tr>
                        <td>
                                    <label for="prezime">Prezime</label></td></tr> <tr>
                        <td>
                                    <input class="form-control" name="prezime" id="prezime"  type="text"></td></tr>
                                    <tr>
                        <td>
                                    <label for="email">Email</label></td></tr> <tr>
                        <td>
                                    <input class="form-control" name="email" id="email"  type="email"></td></tr>
                                    <tr>
                        <td>
                                    <label for="username">Username</label></td></tr> <tr>
                        <td>
                                    <input class="form-control" name="username" id="username"  type="text"></td></tr>
                                    <tr>
                        <td>
                                    <label for="password">Password</label></td></tr> <tr>
                        <td>
                                    <input class="form-control" name="password" id="password"  type="password"></td></tr>
                                    <tr>
                        <td>
                                    <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button></td></tr>
                            </form>';}


                            
                            ?>
	
</body>
</html>