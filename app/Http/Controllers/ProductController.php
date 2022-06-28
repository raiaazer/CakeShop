<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list' => Product::get(),
            'use' => ['datatable'],
            'title' => 'Products Listing'
        ];
        return view('admin.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'use' => ['select'],
            'title' => 'Add Product',
            'categories' => Category::all()
        ];
        return view('admin.products.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $imagesList = [];
        foreach($request->images as $image)
        {
            $imageName = str()->random(10).'-'.time().'.'.$image->extension();
            $image->storeAs('public/products',$imageName);
            $imagesList[] = $imageName;
        }
        $product = $request->validated();
        $product['images'] = $imagesList;
        if(Product::create($product))
        {
            return redirect()->route('product.index')->with('success','Product created successfully.');
        }
        foreach($imagesList as $image)
        {
            @unlink(storage_path('app/public/products/'.$image));
        }
        return redirect()->back()->with('error','Failed to create product.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = [
            'use' => ['select'],
            'title' => 'Edit Product',
            'categories' => Category::all(),
            'product' => $product
        ];
        return view('admin.products.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $imagesList = $product->images;
        $newImages = [];
        if($request->hasFile('images') && count($request->images) > 0){
            foreach($request->images as $image)
            {
                $imageName = str()->random(10).'-'.time().'.'.$image->extension();
                $image->storeAs('public/products',$imageName);
                $imagesList[] = $imageName;
                $newImages[] = $imageName;
            }
        }
        $p = $request->validated();
        $p['images'] = $imagesList;
        if(Product::where('id',$product->id)->update($p))
        {
            return redirect()->route('product.index')->with('success','Product updated successfully.');
        }
        foreach($newImages as $image)
        {
            @unlink(storage_path('app/public/products/'.$image));
        }
        return redirect()->back()->with('error','Failed to update product.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->delete())
        {
            // @unlink(storage_path('app/public/categories/'.$category->getRawOriginal('thumbnail')));
            if(request()->ajax())
            {
                return response()->json(['success'=>'Product deleted successfully.']);
            }
            return redirect()->back()->with('success','Product deleted successfully.');
        }
        
        if(request()->ajax())
        {
            return response()->json(['error'=>'Failed to delete product.']);
        }
        return redirect()->back()->with('error','Failed to delete product.');
    }
}
