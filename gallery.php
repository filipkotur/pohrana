<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		
		<title>Example page - Gallery</title>
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
		<h1>Gallery</h1>
		<div id="gallery">
			<figure id="1">
				<img src="news/amazon1.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Amazon ikona.<figcaption>
			</figure>
			<figure id="2">
				<img src="news/amazon2.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Amazon trgovina.<figcaption>
			</figure>
			<figure id="3">
				<img src="news/news-1.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Amazon skladište.<figcaption>
			</figure>
			<figure id="4">
				<img src="news/potres1.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>European-Mediterranean Seismological Centre.<figcaption>
			</figure>
			<figure id="5">
				<img src="news/news-2.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>epicentar.<figcaption>
            </figure>
            <figure id="6">
				<img src="news/news-2.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>epicentar.<figcaption>
            </figure>
            <figure id="7">
				<img src="news/news-3.jpg" alt="title picture 1" title="title picture 1">
				<figcaption>Nacionalni stožer civilne zaštite.<figcaption>
            </figure>
            <figure id="8">
				<img src="news/capak1.jpg" alt="title picture 2" title="title picture 2">
				<figcaption>Hitna bolnica.<figcaption>
            </figure>
            <figure id="9">
				<img src="news/capak2.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Preventivne mjere.<figcaption>
            </figure>
            <figure id="10">
				<img src="news/capak3.jpg" alt="title picture 3" title="title picture 3">
				<figcaption>Mikrobiologija.<figcaption>
            </figure>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2020 Filip Kotur</p>
	</footer>
</body>
</html>