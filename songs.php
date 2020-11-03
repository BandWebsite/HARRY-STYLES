<?php
    session_start();

    if(isset($_SESSION['User']))
    {
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HARRY STYLES | SONGS</title>
		<link rel = "icon" href ="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.png" type = "image/x-icon">
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/store.css" />
    </head>
    <body bgcolor="black">
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="logout.php?logout">LOGOUT</a> </li>
                    <li><a href="wellcome.php">HOME</a></li>
                	<li><a href="store.php">STORE</a></li>
                	<li><a href="about.php">ABOUT</a></li>
                	<li><a href="Songs.php">SONGS</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">HARRY STYLES</h1>
        </header>
        <section class="container content-section">
            <u><h2 class="section-header">Video Songs</h2></u>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Harry Styles - Sign of the Times</span>
                    <iframe width="956" height="538" src="assets/video2.mp4" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Harry Styles - Adore You</span>
                    <iframe width="956" height="538" src="assets/video1.mp4" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
               
        </section>
        
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">HARRYSTYLES</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="assets/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="assets/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="assets/Facebook Logo.png">
                        </a>
                    </li>
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