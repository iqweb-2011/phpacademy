<?php

class Car
{
    public $brand;
    public $model;
    private $price;

    /**
     * Car constructor.
     * @param $brand
     * @param $model
     */
    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getFormattedPrice()
    {
        return number_format($this->price, 2, ', ', ' ');
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        if (!is_numeric($price)) {
            die('invalid price');
        }

        $this->price = $price;
    }

    function __destruct()
    {
        echo 'Bye-bye ' . $this->brand;
    }
}



