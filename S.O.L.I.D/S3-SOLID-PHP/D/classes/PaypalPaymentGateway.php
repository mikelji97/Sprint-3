<?php

class PayPalPaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} euros payment processed by Paypal.";
    }
}