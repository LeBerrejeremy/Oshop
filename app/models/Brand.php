<?php

use Utils\Database;

Class Brand extends CoreModel{

    protected static $table = "brand";
    protected int $order;

    //Getters
    public function getOrder()        { return $this->order; }

    //Setter
    public function setName ( string $name ) { $this->name = $name; }

}