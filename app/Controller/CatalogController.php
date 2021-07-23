<?php

class CatalogController extends CoreController{


    public function category($data){

        $category = Category::find( $data['category_id'] );
        dump($category);
        $this->_show('category', ['category' => $category]);
    }

    public function brand($data){

        $brand = Brand::find( $data['brand_id'] );
        dump($brand);
        $this->_show('brand', ['brand' => $brand]);
    }

    public function product($data){

        $product = Product::find( $data['product_id'] );
        dump($product);
        $this->_show('product', ['product' => $product] );

    }

    public function type($data){

        $this->_show('type');
    }

}