<?php 

class StripePaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}