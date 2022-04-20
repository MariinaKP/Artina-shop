<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function category()
    {
        $products = Product::join('product_items', 'product_items.product_id', '=', 'products.id')
            ->select(['products.id', 'products.title AS product_title', 'price'])
            ->get();

        return view('products.category')
            ->with('pageTitle', 'Category')
            ->with('products', $products);
    }
    public function show($id)
    {
        $product = Product::join('product_items', 'product_items.product_id', '=', 'products.id')
            ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->where('products.id', '=', $id)
            ->select(['products.id', 'products.title AS product_title', 'product_items.title AS product_items_title',
                'subcategories.title AS subcategory_title', 'description', 'price', 'discount_price', 'images',
                'color', 'size', 'available_quantity'])
            ->first();

        return view('products.single_product')
            ->with('pageTitle', 'todo')
            ->with('product', $product);
    }

    public function favorites()
    {
        return view('products.favorites')
            ->with('pageTitle', 'Favorites');
    }
}
