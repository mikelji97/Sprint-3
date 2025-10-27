<?php 

class BankTransfer implements PaymentMethod {
    public function sendPayment(float $amount): string
    {
        return "{$amount} euros bank transfer done.";
    }
}