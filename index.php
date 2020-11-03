<html>
<head>
<link rel="stylesheet" href="css/video.css">
<title>HARRY STYLES | Login</title>
<link rel = "icon" href ="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.png" type = "image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Garamond&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<br><br><br><br>
<div id="container">
<div id="form">
<form action="process.php" method="POST">
<h2>Log In</h2>
<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
<input type="text" name="UName" placeholder="Username" required><br><br><br>
<input type="password" name="Password" placeholder="Password" required><br>
<p style="text-align:center;font-size:15px;color:red;font-family:'Garamond'">Existing User</p>
<button class="btn btn-success mt-3" name="Login">Login</button>
<p id="p">Don't have an account? <span><a href="Signup.html">Sign up
</a></span></p>
</form>
</div>
</div>
<footer>
<div style="display: inline;float:right;margin-right: 30px;">
<a href="https://www.facebook.com" class="fa fa-facebook"></a>
<a href="https://twitter.com" class="fa fa-twitter"></a>
<a href="https://in.linkedin.com" class="fa fa-linkedin"></a>
<a href="https://www.instagram.com" class="fa fa-instagram"></a>
</div>
</footer>
</body>
</html>