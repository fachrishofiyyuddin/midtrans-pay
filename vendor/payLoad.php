<?php
/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-phpxwwww
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */


require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-QRtgjZ_A3NeNsAOculx9vuLk';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = false;



$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 50000,
    ),
    'item_details' => array(
        array(
            'id' => 1,
            'price' => 50000,
            'quantity' => 1,
            'name' => $_POST['product']
        )
    ),
    'customer_details' => array(
        'first_name' => $_POST['name'],
        'email' => $_POST['email']
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);

echo $snapToken;
