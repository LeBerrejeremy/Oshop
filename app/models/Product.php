<?php

use Utils\Database;

class Product extends CoreModel{

    protected static $table = "products";
    protected string $description;
    protected float $price;
    protected string $picture;
    protected int $stock;

     
    //Foreingn keys
    protected int $brand_id;
    protected int $type_id;
    protected int $category_id;

    

    //Getters
    public function getDescription() { return $this->description; }
    public function getPrice()       { return $this->price; }
    public function getPicture()     { return $this->picture; }
    public function getStock()     { return $this->stock; }

    //Setter
    public function setName ( string $name ) { $this->name = $name; }
    public function setPrice( float $price )   { $this->price = $price; }

    
}