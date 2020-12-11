<script>
  console.log('config.php');
</script>

<?php
// Product information 

$itemName = 'Membership Subscription';
$itemNumber = 'MS123456';

// Subscription price for one month 
$itemPrice = 9;

$validTill = 12;

// PayPal configuration  
define('PAYPAL_ID', 'sb-uvmyk858514@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE  
// live
define('PAYPAL_RETURN_URL', 'https://supernaturalbp.com/apps/bliss/success.php');  
define('PAYPAL_CANCEL_URL', 'https://supernaturalbp.com/apps/bliss/cancel.php');  
define('PAYPAL_NOTIFY_URL', 'https://supernaturalbp.com/apps/bliss/paypal_ipn.php');  



// local
// define('PAYPAL_RETURN_URL', 'https://supernaturalbp.com/apps/bliss/success.php');
// define('PAYPAL_CANCEL_URL', 'https://supernaturalbp.com/apps/bliss/cancel.php');
// define('PAYPAL_NOTIFY_URL', 'https://supernaturalbp.com/apps/bliss/paypal_ipn.php');

// define('PAYPAL_NOTIFY_URL', 'http://3fc0235b.ngrok.io/paypal-subs/paypal_ipn.php');
define('PAYPAL_CURRENCY', 'USD');

// Database configuration  
// define('DB_HOST', 'localhost');  
// define('DB_USERNAME', 'binaural_x37az');  
// define('DB_PASSWORD', 'kOb.rUg{{Z@,');  
// define('DB_NAME', 'binaural_x37az');  




define('DB_HOST', 'localhost');
define('DB_USERNAME', 'binaural_x37az');
define('DB_PASSWORD', 'kOb.rUg{{Z@,');
define('DB_NAME', 'binaural_x37az');




define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://ipnpb.sandbox.paypal.com/cgi-bin/webscr" : "https://ipnpb.sandbox.paypal.com/cgi-bin/webscr");


// define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.sandbox.paypal.com/cgi-bin/webscr
// ");
