<?php

Class Computer
{
    public $brand;
    public $memory;
    public $price;

    public function __construct($brand, $memory, $price){
        $this->brand  = $brand;
        $this->memory  = $memory;
        $this->price  = $price;
    }

    function view(){
        echo 'Ноутбук ' . $this->brand . ' количество памяти ' . $this->memory . ' стоит ' . $this->price .'<br>';
    }
}
