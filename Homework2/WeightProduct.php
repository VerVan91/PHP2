<?php

class WeightProduct extends Product
{
    private $weight;

    public function __construct($name, $price, $weight)
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    public function getFinalCost(): float
    {
        return $this->price * $this->weight;
    }

}
