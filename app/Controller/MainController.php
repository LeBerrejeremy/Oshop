<?php

class MainController extends CoreController{

    public function home(){

        $this->_show('home');
    }

    public function category(){

        $this->_show('products_list');
    }

    public function legal(){

        $this->_show('legal');
    }


}