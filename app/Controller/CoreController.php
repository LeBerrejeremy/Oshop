<?php

class CoreController{

    public function view($modelName=null, $data){

        if( class_exists($modelName) )
        {
            $obj = $modelName::find( $data[ $modelName.'_id' ] );
            dump($obj);
            $this->_show($modelName, [$modelName => $obj]);
        }else
        {
            $this->_show($modelName);
        }
        
    }

    protected function _show($viewName, $viewData = []){

        $viewData['currentPage'] = $viewName;

        require_once __DIR__."./../views/header.tpl.php";
        require_once __DIR__."./../views/" . $viewName . ".tpl.php";
        require_once __DIR__."./../views/footer.tpl.php";
    }
}