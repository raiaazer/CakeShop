<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::active()->get();
        $products = Product::whereIn('category_id',$categories->pluck('id'))->get();
        
        $data = [
            'title' => 'Cake Shop',
            'categories' => $categories,
            'products' => $products
        ];

        $data['categoryOne'] = $categories->random(1)->first();
        $data['categoryTwo'] = $categories->where('id','!=',$data['categoryOne']->id)->random(1)->first();
        $data['categoryThree'] = $categories->whereNotIn('id',[$data['categoryOne']->id,$data['categoryTwo']->id])->random(1)->first();
        return view('theme.index',$data);
    }

}
