<?php
require 'Computer.php';
require 'ProComputer.php';

$computers = [
    new Computer('HP',512,200),
    new Computer('Sony',1024,400),
    new ProComputer('Lenovo',2048,2000,2048),
    ];

$sum = 0;
$count = 0;
foreach ($computers as $comp) {
    $comp->view();
    $sum += $comp->price;
    $count += $comp;
}

echo 'Сумма = ' . $sum . '<br>';
echo 'Количество позиций = ' . $count;

?>