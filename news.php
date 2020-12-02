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
		<div class="hero-image" style="height: 200px;"></div>
		<nav>
			<ul>
			  <li><a href="index.php">Početna</a></li>
			  <li><a href="news.php">News</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about-us.html">About</a></li>
			  <li><a href="gallery.html">Gallery</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>NEWS</h1>
		<div class="news">
		<?php
        
		if ($_SESSION['user']['valid'] == 'true' && ($_SESSION['user']['role'] == 'admin' || $_SESSION['user']['role'] == 'editor')){
			print ' <a href="news-3.html"><img src="news/news-3.jpg" alt="ŽUPANIJE ŠALJU PODATKE, ČEKA SE STOŽER" title="ŽUPANIJE ŠALJU PODATKE, ČEKA SE STOŽER"></a>
			<a href="news-3.html"><h2 >ŽUPANIJE ŠALJU PODATKE, ČEKA SE STOŽER</h2></a>
			<p>Stručnjaci traže primjenu modela iz jednog grada na cijelu Hrvatsku</p><p><a href="news-3.html">Više ...</a></p>
			<p><time datetime="2020-11-24">24.11.2020</time></p>
			<hr>
			<a href="news-2.html"><img src="news/news-2.jpg" alt="ZAGREB SE OPET ZATRESAO" title="ZAGREB SE OPET ZATRESAO"></a>
			<a href="news-2.html"><h2>ZAGREB SE OPET ZATRESAO</h2></a>
			<p> Građani uznemireni: ‘Jaka detonacija, dobro je zatreslo; Probudio me, zapucketali su zidovi; Strašan zvuk…’ </p><p><a href="news-2.html">Više ...</a></p>
			<p><time datetime="2020-11-24">24.11.2020</time></p>
			<hr>
			<a href="news-1.html"><img src="news/news-1.jpg" alt="AMAZON JE NAPOKON STIGAO U HRVATSKU" title="AMAZON JE NAPOKON STIGAO U HRVATSKU"></a>
			<a href="news-1.html"><h2>AMAZON JE NAPOKON STIGAO U HRVATSKU</h2></a>
			<p>Ovom suradnjom Hrvatska pošta će svakako ojačati poziciju na tržištu i brend, a građani Hrvatske moći će kupovati više proizvoda iz Amazonove ponude te ih dobiti u kraćem roku.</p><p><a href="news-1.html">More ...</a></p>
			<p><time datetime="2020-11-24">24.11.2020</time></p>
			<hr>
			<a href="news-4.html"><img src="news/news-4.jpg" alt="Coronavirus: Retail workers scared as cases surge" title="Coronavirus: Retail workers  as cases surge"></a>
			<a href="news-4.html"><h2>Coronavirus: Retail workers  as cases surge</h2></a>
			<p>Labour activists in the US say big retailers like Amazon and Walmart must do more to protect workers as surging coronavirus cases coincide with the holiday shopping rush.</p> <p><a href="news-4.html">More ...</a></p>
			<p><time datetime="2020-11-24">24.11.2020</time></p>
			<hr>
			<a href="news-5.html"><img src="news/news-5.jpg" alt="The best books of the year 2020" title="The best books of the year 2020"></a>
			<a href="news-5.html"><h2>The best books of the year 2020</h2></a>
			<p>It’s been a bumper year for books, from dystopian fiction and memoir to powerful stories about race and identity. Lindsay Baker rounds up BBC Culture’s picks. </p><p><a href="news-5.html">More ...</a></p>
			<p><time datetime="2020-11-24">24.11.2020</time></p>
			<hr> ';}
			else if($_SESSION['user']['valid'] == 'false'){
				$query  = "SELECT * FROM news";
				$query .= " WHERE archive='N'";
				$query .= " ORDER BY date DESC";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
					<div class="news">
						<img src="news/' . $row['slikaPath'] . '" alt="' . $row['naslov'] . '" naslov="' . $row['naslov'] . '">
						<h2>' . $row['naslov'] . '</h2>';
						echo strip_tags($row['description']);
						print '
						<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
						<hr>
			</div>';
		}
			  
			}
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