<?php

//1. Создать структуру классов ведения товарной номенклатуры.
//а) Есть абстрактный товар.
//б) Есть цифровой товар, штучный физический товар и товар на вес.
//в) У каждого есть метод подсчета финальной стоимости.
//г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
//д) Что можно вынести в абстрактный класс, наследование?
//    2. *Реализовать паттерн Singleton при помощи traits.


require 'Product.php';
require 'PieceProduct.php';
require 'DigitalProduct.php';
require 'WeightProduct.php';

$Pieceprice = 1000000;

$products = [
    new PieceProduct('Авто',$Pieceprice, 3 ),
    new DigitalProduct('Создание сайта',$Pieceprice ),
    new WeightProduct('Мясо',200, 10 ),
];

foreach ($products as $product) {
    echo $product->getName() . ' стоит ' . $product->getFinalCost() . "\n";

}


?>