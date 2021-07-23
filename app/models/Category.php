<?php

use Utils\Database;

Class Category extends CoreModel{

    protected static $table = "category";
    protected string $subtitle;
    protected string $picture;
    protected int $order;
     

    //Getters
    public function getSubtitle() { return $this->subtitle; }
    public function getPicture()     { return $this->picture; }
    public function getOrder()        { return $this->order; }

    //Setter
    public function setName ( string $name ) { $this->name = $name; }

}