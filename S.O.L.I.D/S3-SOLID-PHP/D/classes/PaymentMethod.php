<?php

interface PaymentMethod
{

    public function sendPayment(float $amount): string;
}
