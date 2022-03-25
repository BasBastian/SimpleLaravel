<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use App\DataTables\Products\ProductsDataTable;
use App\Http\Controllers\Controller as BaseController;

class ProductsController extends BaseController {
    public function list(ProductsDataTable $productsDataTable) {
        $products = $productsDataTable->query(new Product())->get();

        return view('products.list', [
            'products' => $products
        ]);
    }

    public function item(ProductsDataTable $productsDataTable, $productId) {
        $product = $productsDataTable->query(new Product())
            ->where('id', $productId)
            ->firstOrFail();

        return view('products.item', [
            'product' => $product
        ]);
    }
}
