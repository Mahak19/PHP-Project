<?php
$qty=5;
$price=100;

echo("Quantity: ".$qty)."<br>";
echo("Price: ".$price)."<br>"."<br>";

$result=$qty>7 && $price>99;
echo("qty>7 && price>99 is ");
echo var_dump($result)."<br>";

$result=$qty>7 || $price>99;
echo("qty>7 || price>99 is ");
echo var_dump($result)."<br>";

$result=$qty>7 XOR $price>99;
echo("qty>7 XOR price>99 is ");
echo var_dump($result)."<br>";

$result=! $qty>7;
echo("! qty>7 is ");
echo var_dump($result)."<br>";

?>