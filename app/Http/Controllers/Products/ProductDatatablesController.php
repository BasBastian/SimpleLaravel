<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Products\ProductsDataTable;


/**
 * Controls displaying data in Datatables template.
 */
class ProductDatatablesController extends Controller
{
    public function index(ProductsDataTable $productsDataTable)
    {
        return $productsDataTable->render('products.index');
    }
}
