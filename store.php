<?php
    session_start();

    if(isset($_SESSION['User']))
    {
?>
<!DOCTYPE html>
<html>

<head>
    <title>HARRY STYLES | Store</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="css/store.css" />
	<link rel = "icon" href ="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.jpg" type = "image/x-icon"> 
    <script src="js/store.js" async></script>
</head>

<body bgcolor="black">
    <header class="main-header">
        <nav class="main-nav nav">
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
    <section class="container content-section">
        <u>
            <h2 class="section-header">MUSIC</h2>
        </u>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Harry Styles</span>
                <img class="shop-item-image" src="assets/ALBUM1.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 900</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
			 <div class="shop-item">
                <span class="shop-item-title">Two Ghosts</span>
                <img class="shop-item-image" src="assets/Two Ghost.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 800</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
			<div class="shop-item">
                <span class="shop-item-title">Sign of the Times</span>
                <img class="shop-item-image" src="assets/Sign of the Time.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 1100</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Fine Line</span>
                <img class="shop-item-image" src="assets/ALBUM2.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 1050</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

    </section>
    <section class="container content-section">
        <u>
            <h2 class="section-header">MERCHANDISE</h2>
        </u>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">T-Shirt</span>
                <img class="shop-item-image" src="assets/kindnessblack.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 1400</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
			<div class="shop-item">
                <span class="shop-item-title">Beach towel</span>
                <img class="shop-item-image" src="assets/Towel.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 2800</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
			<div class="shop-item">
                <span class="shop-item-title">Pom Beanie</span>
                <img class="shop-item-image" src="assets/Beanie.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 2100</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Cup</span>
                <img class="shop-item-image" src="assets/cup.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Rs 499</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="assets/kindnessblack.png" width="100" height="100">
                    <span class="cart-item-title">T-Shirt</span>
                </div>
                <span class="cart-price cart-column">Rs 1400</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="1">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="assets/ALBUM1.png" width="100" height="100">
                    <span class="cart-item-title">Harry Styles</span>
                </div>
                <span class="cart-price cart-column">Rs 700</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="2">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">Rs 2800</span>
        </div>
        <a href="payment-form.php" button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></a>
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