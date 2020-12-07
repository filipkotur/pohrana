<!DOCTYPE html>
<html>

	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		
		<title>Example page - Contact</title>
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
            
			if (isset($_SESSION['username'])) {
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
		<h1>Contact Form</h1>
		<div id="contact">
        
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7890741539636!2d15.966758816056517!3d45.795453279106205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sUl.+Vrbik+VIII%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1509296660756" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
                <table style="table-layout: fixed;width: 200px;" align="center">
                    <tr>
                        <td>
                Kontakt Filip Kotur 0921048220
            </tr></td>

            
			</form>
		</div>
	</main>
	
</body>
</html>