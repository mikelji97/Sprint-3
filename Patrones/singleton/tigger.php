<?php

class Tigger
{
    private static $instance;
    private static int $roarCounter = 0;


    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
        self::$roarCounter++;
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function getCounter(){
    return "El tigre ha hecho " . self::$roarCounter . " sonidos.";
    }

} 


$tigger = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
$tigger->roar(); 
$tigger->roar();
$tigger->roar();
$tigger2->roar();

echo Tigger::getCounter(); 
?>






