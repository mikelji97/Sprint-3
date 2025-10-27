<?php 

class StripePaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} euros payment processed with Stripe.";
    }
}