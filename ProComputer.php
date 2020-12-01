<?php

class ProComputer extends Computer{
    public $memoryVideo;

    public function __construct($brand, $memory, $price, $memoryVideo)
    {
        $this->memoryVideo = $memoryVideo;
        parent::__construct($brand, $memory, $price);
    }

    public function view()
    {
        echo 'Ноутбук ' . $this->brand . ' количество памяти ' . $this->memory
        . ' видеокарта ' . $this->memoryVideo. ' стоит ' . $this->price . '<br>';

    }
}
