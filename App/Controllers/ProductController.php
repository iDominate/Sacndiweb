<?php

namespace App\Controllers;

use App\Models\Product;
use Core\DB;

class ProductController extends Controller
{
    public function add()
    {
        return view('products/add');
    }

    public function store()
    {
        $db = DB::connect();
        $db->where('sku', $_POST['sku']);
        $result = $db->get('products');
        if ($result) {
            redirect('products/add');
        }
        $product = $this->getController();
        $product->commitToDatabase(DB::connect());
        redirect('product/all');
    }

    public function delete()
    {
        $products = $_POST['deleteId'];
        foreach ($products as $product) {
            Product::deleteProduct(DB::connect(), $product);
        }
        redirect('product/all');
    }

    public function all()
    {
        $data['products'] = Product::getAllProducts();
        return view('products/all', $data);
    }
}
