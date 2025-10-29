<?php

require_once 'Item.php';
require_once 'Transport.php';
require_once 'Wallet.php';
require_once 'Keys.php';
require_once 'Phone.php';
require_once 'CarKeys.php';
require_once 'cardTransport.php';
require_once 'Person.php';


$persona1 = new Person(new Wallet(), new Keys(), new CarKeys(), new Phone());
$persona1->leaveHome();


$persona2 = new Person(new Wallet(), new Keys(), new CardTransport(), new Phone());
$persona2->leaveHome();

?>