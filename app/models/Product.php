<?php

use Utils\Database;

class Product{

    private $id;
    private $name;
    private $description;
    private $price;
    private $picture;
    private $stock;
    private $created_at;
    private $updated_at;
     
    //Foreingn keys
    private $brand_id;
    private $type_id;
    private $category_id;

    public function __construct(int $product_id)
    {
        $this->id = $product_id;

        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM products WHERE id ='.$this->id;
        $statement = $pdo->query($sql);
        $product = $statement->fetch(PDO::FETCH_ASSOC);
        dump($product);
    }

}