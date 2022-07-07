<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        return view('theme.products');
    }

    public function productDetails($product)
    {
        $product = Product::where('slug',$product)->firstOrFail();
        $relatedProducts = Product::where('id','!=',$product->id)
            ->where('category_id',$product->category_id)
            ->limit(8)
            ->get();
        return view('theme.product-details',['product'=>$product,'relatedProducts'=>$relatedProducts]);
    }

}
