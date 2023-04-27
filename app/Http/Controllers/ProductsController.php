<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    
    public function getProducts() {
        return Products::all();
    }

    public function storeProducts(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required'
        ]);

        return Products::create($request->all());
    }

    public function getProductsByID($id) {
        return Products::find($id);
    }

    public function updateProducts(Request $request, $id) {
        $products = Products::find($id);
        $products->update($request->all());

        return $products;
    }

    public function deleteProduct($id) {
        return Products::destroy($id);
    }
}
