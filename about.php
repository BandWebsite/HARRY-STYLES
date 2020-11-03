<?php
    session_start();

    if(isset($_SESSION['User']))
    {
?>
<!DOCTYPE html>
<html>

<head>
	<title>HARRY STYLES | ABOUT</title>
	<link rel = "icon" href ="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.jpg" type = "image/x-icon">
	<meta name="description" content="Harry styles - is a former 1D member.">
	<link rel="stylesheet" href="css/about.css" />
</head>

<body>
	<header class="main-header">
		<nav class="nav main-nav">
			<ul>
				<li><a href="logout.php?logout">LOGOUT</a> </li>
				<li><a href="wellcome.php">HOME</a></li>
				<li><a href="Store.php">STORE</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="songs.php">SONGS</a></li>
			</ul>
		</nav>
		<h1 class="band-name band-name-large">HARRY STYLES</h1>
	</header>
	<section class="content-section contaner">
		<h2 class="section-header">ABOUT</h2>
		<img class="about-image" src="assets/about-image.jpg" width=280px />
		<br><br>
		<p>Harry Edward Styles (born 1 February 1994) is an English singer, songwriter and actor.
			Born in Redditch, Worcestershire, his musical career began in 2010, when he auditioned as a
			solo contestant on the British music competition series The X Factor. Following his
			elimination early on, he was brought back to join the boy band One Direction, which
			eventually became one of the best-selling boy bands of all time.
			After the band's indefinite hiatus in 2016, Styles signed with Columbia Records as a solo
			artist.</p><br>
		<p>Styles released his self-titled debut album in 2017, which topped the charts in fourteen
			countries and ranked in several music critics' year-end lists. The album's single,
			"Sign of the Times", topped the UK Singles Chart, peaked at number four on the US Billboard
			Hot 100 and was named "Song of the Year" by Rolling Stone, while its music video earned Style
			s a Brit Award. Styles made his acting debut in Christopher Nolan's war film Dunkirk (2017).
			His second studio album, Fine Line (2019), debuted atop the US Billboard 200 and broke the
			record as the biggest sales debut from an English male artist in the US in the Nielsen
			SoundScan era. The album yielded the UK and US top 10 singles "Adore You" and
			"Watermelon Sugar".</p><br />
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, unde nisi blanditiis ut, cumque incidunt est provident earum dolor quae sunt cum voluptates voluptate perferendis beatae quaerat porro ad, consequatur aut voluptas ipsa maiores. Exercitationem corporis similique sunt voluptas dignissimos sed explicabo iure fugiat, deleniti pariatur illo quidem ab deserunt rerum numquam laudantium ut mollitia? Ducimus sit ab assumenda at fugit voluptatem commodi maiores placeat inventore eligendi tenetur autem in reprehenderit doloribus laudantium libero dolorem sed, quasi laboriosam quibusdam deserunt! Odio reprehenderit veritatis officiis alias. Fugit omnis sequi perspiciatis hic ipsam, natus incidunt ut tempora ratione nihil aut soluta iusto nobis at magni laboriosam in commodi id, autem error. Commodi, error autem. Dolores provident deserunt sunt commodi, minus recusandae quos reprehenderit amet velit sed suscipit illo nulla esse veritatis odio dolorum quia quam aspernatur at molestias iusto officia neque dolor. Vero distinctio ad quod. Nemo aliquam temporibus consequuntur mollitia ipsum voluptate, quo tenetur qui ratione nulla iure autem repudiandae repellendus, delectus molestiae blanditiis dolorum eum soluta? Dignissimos corrupti temporibus expedita cumque adipisci maiores quidem ullam iste dolor fuga aut, fugit facilis eum hic! Rerum dolorem nesciunt, harum consequatur, accusantium porro, ab mollitia suscipit explicabo itaque nulla temporibus a neque repellendus.</p>
	</section>
	<footer class="main-footer">
		<div class="container main-footer-container">
			<h3 class="band-name">HARRY STYLES</h3>
			<ul class="nav footer-nav">
				<li><a href="https://www.youtube.com/channel/UCZFWPqqPkFlNwIxcpsLOwew" target="_basic"><img
							src="assets/YouTube Logo.png" /></a></li>
				<li><a href="https://www.facebook.com/harrystyles" target="_blank"><img src="assets/Facebook Logo.png" /></a>
				</li>
				<li><a href="https://open.spotify.com/artist/6KImCVD70vtIoJWnq6nGn3" target="_blank"><img
							src="assets/Spotify Logo.png" /></a></li>
			</ul>
		</div>
	</footer>
</body>

</html>

<?php
    }
    else
    {
        header("location:index.php");
    }

?>