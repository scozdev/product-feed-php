<?php

class Product{
    public $id;
    public $name;
    public $price;
    public $category;
    public function __construct($id, $name, $price, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}
