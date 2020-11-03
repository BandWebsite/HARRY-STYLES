<?php 
require("config.php");
?>
<form action="submit.php" method="post">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $PublishableKey ?>"
data-amount="50000"
data-name="HARRY STYLES"
data-description="MERCH STORE"
data-image= "assets/stripe-image.jpg"
data-currency = "inr"


></script>

</form>
