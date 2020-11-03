<?php
require('stripe-php-master/init.php');
$PublishableKey="pk_test_51Hb5oFEEgejindQzCpdgRFQ6hDwP34WSUDM0cfmrwNSdUCBfZZoboDvxJYv5uPWbfGWK2teYrtuCQgwGIWJEqHU000W7OAgQdN";
$SecretKey="sk_test_51Hb5oFEEgejindQzI2RcDVL372TsCl6yzabr2XqzmnPfmIYJdewgKENDiEDmKULu7FQhrFUS0GjNBmaKcfYzLFqx00pcy1oRcr";
\Stripe\Stripe::setApiKey($SecretKey);
?>
