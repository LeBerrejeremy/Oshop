<?php

class CatalogController{


    public function category(){

        $this->_show('category');
    }

    private function _show($viewName, $viewData = []){

        $viewData['currentPage'] = $viewName;

        require_once __DIR__."./../views/header.tpl.php";
        require_once __DIR__."./../views/" . $viewName . ".tpl.php";
        require_once __DIR__."./../views/footer.tpl.php";
    }

}