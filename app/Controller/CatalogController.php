<?php

class CatalogController{


    public function category($data){

        $category = Category::find( $data['category_id'] );
        dump($category);
        $this->_show('category');
    }

    public function brand($data){

        $brand = Brand::find( $data['brand_id'] );
        dump($brand);
        $this->_show('brand');
    }

    public function product($data){

        $product = Product::find( $data['product_id'] );
        dump($product);
        $this->_show('product', ['product' => $product] );

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