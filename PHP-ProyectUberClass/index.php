<?php
require_once('car.php');
require_once('uberX.php');
require_once('account.php');
require_once('uberPool.php');

$uberX = new uberX("CVB123", new account("Alfredo Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();
$uberPool = new uberPool("TYU567", new account("Andrea Ferran", "ANDA765"), "Dodge", "Atitude");
$uberPool->printDataCar();
?>