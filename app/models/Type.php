<?php

use Utils\Database;

Class Type extends CoreModel{

    protected static $table = "type";
    protected int $order;
     

    //Getters
    public function getOrder()        { return $this->order; }

    //Setter
    public function setName ( string $name ) { $this->name = $name; }

}