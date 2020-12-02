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
			  <li><a href="registration.php">Registracija</a></li>
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
		<?php
        
        if (isset($naslov) && isset($kratkiOpis) && isset($naslov) && isset($tekst)) {
            echo "prva provjera-  sve postavljeno";
        }
        $target_dir = "uploads/";
        $target_file_name = $target_dir . basename($_FILES["file"]["name"]);
        $response = array();

        $vrijemeObjave = date('Y-m-d H:i:s');
        $tekst = $_POST['tekst'];
        $naslov = $_POST['naslov'];
        $kratkiOpis = $_POST['kratkiOpis'];

        if (strlen($kratkiOpis) > 105) {
            echo "Kratki opis ima previše znakova";
        } else {
            if ($naslov!='' && $kratkiOpis!=''   && $tekst!='' ) {

                echo "podaci su spremnjeni";
                // get details of the uploaded file
                $fileTmpPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileSize = $_FILES['file']['size'];
                $fileType = $_FILES['file']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
                //rename
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                $FileDir = 'slike/';
                $dest_path = $FileDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path) && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "jpeg" || $fileExtension == "webp")) {

                    $sql = "insert into vijest (naslov,slikaPath,vrijemeObjave,tekst,kratkiOpis) values ('$naslov','$dest_path','$vrijemeObjave','$tekst','$kratkiOpis')";
                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                } else {
                    echo "Nije spremljeno";
                }
            } else {
                echo "Unesite sve polja";
            }
        }


        ?>
		
		
	</main>
	<footer>
		Copyright &copy; <?php print date("Y");?>
	</footer>
</body>
</html>