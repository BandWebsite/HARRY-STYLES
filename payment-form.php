<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="css/payment.css">
  <link rel="icon"
    href="https://nypost.com/wp-content/uploads/sites/2/2019/12/harry-styles-album-1.jpg?quality=80&strip=all&w=618&h=410&crop=1.jpg"
    type="image/x-icon">
	<style>
		.sbutton{
			display: table;
			margin: 0 auto;
			padding-bottom:50px;
		}
	</style>
</head>
<body >
  <div id="wrap">
    
  <form class="payment-form">
    <div id="phead">PAYMENT DETAILS</div>
    <BR><hr >
    
    <table>
      
      <tr>
        <td> <label for="fname">FIRST NAME</label>  </td>
        <td>  <label for="lname">LAST NAME</label> </td>
      </tr>
      <tr>
        <td>  <input type="text" id="fname" name="fname"  placeholder="Enter first name" required> </td>
        <td>  <input type="text" id="lname" name="lname"  placeholder="Enter last name"> </td>
      </tr>
      <tr>
        <td>  <label for="state">STATE</label> </td>
        <td> <select id="state" name="state" required>
        <option value="null">_ _</option> 
        <option value="Maharashtra">MAHARASHTRA</option> 
        <option value="West Bengal">WEST BENGAL</option>
        <option value="Jharkhand">JHARKHAND</option>
        <option value="Tamilnadu">TAMILNADU</option>
        <option value="Delhi">DELHI</option>
        <option value="Kerela">KERELA</option>
        <option value="Karnataka">KARNATAKA</option>
      </select>  </td>
      </tr>
      <tr>
        <td>  <label for="city">CITY</label> </td>
        <td> <input type="text" id="city" name="city" placeholder="Enter city" required>  </td>
      </tr>
      
      

    </table> 

<label for="adline">ADDRESS</label>
      <textarea id="adline" placeholder="Enter complete address" required></textarea>
     


    <table>
      
      <tr>
        <td>  <label for="mobile">MOBILE</label> </td>
        <td> <input type="tel" id="mobile" name="mobile" placeholder="+919999999999" required>  </td>
      </tr>
      <tr>
        <td> <label for="password">CONFIRM PASSWORD</label>  </td>
        <td> <input type="password" id="password" name="password" placeholder="Enter password" required>  </td>
      </tr>

    </table>
     


  </form>

    
    </div>


    <?php 
require("config.php");
?>
<form action="submit.php" method="post" class="sbutton">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $PublishableKey ?>"
data-amount="50000"
data-name="HARRY STYLES"
data-description="MERCH STORE"
data-image= "assets/stripe-image.jpg"
data-currency = "inr"


></script>

</form>


  </body>
</html>