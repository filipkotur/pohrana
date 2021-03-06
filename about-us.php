<?php
define('__APP__', TRUE);
session_start();

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
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="alen@tvz.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - About Us</title>
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
		<h1>About Us</h1>
		<h2>History of the Internet</h2>
		<video width="50%" controls poster="news/Arthur_C._Clarke.jpg" >
		  <source src="video/ABC_Clarke_predicts_internet_and_PC.ogv" type="video/mp4">
		  Your browser does not support HTML5 video.
        </video>
        <p> Paul Baran proposed a distributed network based on data in message blocks in the early 1960s and Donald Davies conceived of packet switching in 1965 at the National Physical Laboratory (NPL) in the UK, and proposed building a national commercial data network.</p>
        <p>The Advanced Research Projects Agency (ARPA) of the U.S. Department of Defense awarded contracts in 1969 for the development of the ARPANET project, directed by Robert Taylor and managed by Lawrence Roberts.</p>
		<p>ARPA projects and international working groups led to the development of protocols for internetworking, in which multiple separate networks could be joined into a network of networks, which produced various standards.</p>
		<p> Bob Kahn, at ARPA, and Vint Cerf, at Stanford University, published research in 1974 that evolved into the Transmission Control Protocol (TCP) and Internet Protocol (IP), the two protocols of the Internet protocol suite.</p>
        <p>In 1974 Arthur C. Clarke had interview with ABC , in which he describes a future of ubiquitous networked personal computers.</p>
		<p>Video courtesy of <a href="https://www.ted.com/talks/tim_berners_lee_the_year_open_data_went_worldwide" target="_blank">wikipedia.com</a></p>
	</main>
	<footer>
		<p>Copyright &copy; 2020 Filip Kotur</p>
	</footer>
</body>
</html>