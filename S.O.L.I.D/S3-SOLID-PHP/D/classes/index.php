<?php

require_once "PaymentMethod.php";
require_once "BankTransfer.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";
require_once "PaymentProcessor.php";


    /*-----Pago con Paypal-----*/
$pagoPayPal = new PayPalPaymentGateway();
$procesador1 = new PaymentProcessor($pagoPayPal);
echo $procesador1->procesarPago(150000) . PHP_EOL;

    /*-----Pago con Bank-----*/
$pagoBank = new BankTransfer();
$procesador2 = new PaymentProcessor($pagoBank);
echo $procesador2->procesarPago(300) . PHP_EOL;

    /*-----Pago con Stripe-----*/
$pagoStripe = new StripePaymentGateway();
$procesador3 = new PaymentProcessor($pagoStripe);
echo $procesador3->procesarPago(200) . PHP_EOL;