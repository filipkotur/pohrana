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
			  <li><a href="about-us.php">About</a></li>
			  <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="login.php">Prijava</a></li>
			  <li><a href="registration.php">Registracija</a></li>
        <li><a href="admin.php">Admin</a></li>


			  <?php

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
              print'<div style="margin:20px; width:90%">
                    <div >
                      <h3 >Dodaj novi članak</h3>
                    </div>
                    <div >
                      <form action="dodaniclanak.php" method="POST" class="form" role="form">
                        <div >
                          <label for="naslov">Naziv članka</label> 
                          <input class="form-control" name="naslov" id="naslov"  type="text">
                        </div>
                        <div >
                          <label for="kratkiOpis">Kratki opis - 100 znakova</label> 
                          <input class="form-control" name="kratkiOpis" id="kratkiOpis"  type="text">
                        </div>
                        <div >
                              <label for="tekst">Sadržaj članka</label>
                              <textarea class="form-control" id="tekst" name="tekst" rows="6"></textarea>
                        </div>
                        
                        <input type="file" name="file" id="file">
                        <div >
                          <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button>
                        </div>
                      </form>
                    </div>
                  </div>';
                  $query  = "SELECT * FROM korisnik ";
                  $result = @mysqli_query($conn, $query);

                  echo '<table   style="border: 1px solid black">';
while($row = @mysqli_fetch_array($result, MYSQLI_ASSOC)
){
  echo '<tr>
        <td><font size="4" face="Lucida Sans Unicode" >' .$row['username'].'</td>
        <td><font size="4" face="Lucida Sans Unicode" >' .$row['role'].'</td>

        </tr>';
}
echo '</table>';
              print '<form name="my_form" method="post" action="delete_user.php">
              User Name: <input type="text" name="username_delete" placeholder="username"><br />
              <input type="submit" name="btn_delete" value="Delete User" />
          </form>'   ; 

            }
            else if($_SESSION['user']['valid'] == 'true'){
              echo "<h2>Normalan korisnik - pristup zabranjen</h2>";
            }
            else{echo "<h2 >Niste registrirani</h2>";}


        ?>
		
		
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>