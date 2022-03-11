<?php

require 'function.php';

$order = new Order();

$order->setNama("Nasi Goreng");
$order->setHarga(10000);

echo $order->getNama()."<br>";
echo $order->getHarga()."<br>";
echo $order->sumDiscount(10000, 10)."<br>";

//create data
