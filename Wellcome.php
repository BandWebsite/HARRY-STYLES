<?php
    session_start();

    if(isset($_SESSION['User']))
    {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HARRY STYLES</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/store.css" />
		  <link rel = "icon" href ="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.png" type = "image/x-icon"> 
    </head>
    <body bgcolor="black">
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="logout.php?logout">LOGOUT</a> </li>
                    <li><a href="Wellcome.php">HOME</a></li>
                	<li><a href="store.php">STORE</a></li>
                	<li><a href="about.php">ABOUT</a></li>
                	<li><a href="songs.php">SONGS</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">HARRY STYLES</h1>
            <div class="container">
                <a href="Store.php"><button type="button" class="btn btn-header">Get our Latest Album</button></a>
            </div>
            <a href="Songs.php"><button type="button" class="btn btn-header btn-play">&#9658;</button></a>
        </header>
        <section class="content-section container">
            <h2 class="section-header">CONCERTS</h2>
            <div>
                <div class="tour-row">
                    <span class="tour-item tour-date">JAN 16</span>
                    <span class="tour-item tour-city">DETROIT, MI</span>
                    <span class="tour-item tour-arena">DTE ENERGY MUSIC THEATRE</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
                <div class="tour-row">
                    <span class="tour-item tour-date">FEB 19</span>
                    <span class="tour-item tour-city">TORONTO, ON</span>
                    <span class="tour-item tour-arena">BUDWEISER STAGE</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
                <div class="tour-row">
                    <span class="tour-item tour-date">FEB 22</span>
                    <span class="tour-item tour-city">BRISTOW, VA</span>
                    <span class="tour-item tour-arena">JIGGY LUBE LIVE</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
                <div class="tour-row">
                    <span class="tour-item tour-date">FEB 29</span>
                    <span class="tour-item tour-city">PHOENIX, AZ</span>
                    <span class="tour-item tour-arena">AK-CHIN PAVILION</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
                <div class="tour-row">
                    <span class="tour-item tour-date">MAY 2</span>
                    <span class="tour-item tour-city">LAS VEGAS, NV</span>
                    <span class="tour-item tour-arena">T-MOBILE ARENA</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
                <div class="tour-row">
                    <span class="tour-item tour-date">MAY 7</span>
                    <span class="tour-item tour-city">CONCORD, CA</span>
                    <span class="tour-item tour-arena">CONCORD PAVILION</span>
                    <a href="Tickets.php" button type="button" class="tour-item tour-btn btn btn-primary">BUY TICKETS</button></a>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">HARRY STYLES</h3>
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