<?php

class CatalogController{


    public function category($data){

        $this->_show('category');
    }

    public function brand($data){

        $this->_show('brand');
    }

    public function product($data){

        $product = new Product( $data['product_id'] );

        $this->_show('product', $product);
    }

    public function type($data){

        $this->_show('type');
    }

    private function _show($viewName, $viewData = []){

        $viewData['currentPage'] = $viewName;

        require_once __DIR__."./../views/header.tpl.php";
        require_once __DIR__."./../views/" . $viewName . ".tpl.php";
        require_once __DIR__."./../views/footer.tpl.php";
    }

}