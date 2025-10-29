<?php

class Person {
    private Wallet $wallet;
    private Keys $keys;
    private Transport $transport;
    private Phone $phone;


    public function __construct(Wallet $wallet,Keys $keys,Transport $transport,Phone $phone)
    {
        $this->wallet = $wallet;
        $this->keys = $keys;
        $this->transport = $transport;
        $this->phone = $phone;
    }


    public function leaveHome() :void {
        echo "Leaving home: " . PHP_EOL;
        $this->wallet->takeObject();
        $this->keys->takeObject();
        $this->transport->takeObject();
        $this->phone->takeObject();
    }
}
?>