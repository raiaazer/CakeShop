<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
// use File;
// use Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['list'] = Category::all();
        // $data['use'] = ['datatable'];
        $data = [
            'use' => ['datatable'],
            'title' => 'Categories Listing',
            'list' => Category::all()
        ];
        return view('admin.categories.index',$data);
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
            'category' => ['name'=>null,'slug'=>null,'status'=>null]
        ];
        return view('admin.categories.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        // $validate = $request->validate([
        //     'name' => ['required','max:100'],
        //     'slug' => ['required','unique:categories,slug'],
        //     'status' => ['nullable','in:0,1'],
        //     'thumbnail' => ['required','image']
        // ]);
        // $validate = $this->validateCategory($request,'store');
        
        $validate = $request->validated();

        $thumbnail = str()->random(10).'-'.time().'.'.$request->thumbnail->extension();
        $request->thumbnail->storeAs('public/categories',$thumbnail);

        $validate['thumbnail'] = $thumbnail;
        Category::create($validate);
        return redirect()->back()->with('success','Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            'use' => ['select'],
            'category' => $category
        ];
        return view('admin.categories.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        // $validate = $request->validate([
        //     'name' => ['required','max:100'],
        //     'slug' => ['required','unique:categories,slug,'.$category->id],
        //     'status' => ['nullable','in:0,1'],
        //     'thumbnail' => ['nullable','image']
        // ]);

        // $validate = $this->validateCategory($request,'update',$category->id);

        $validate = $request->validated();

        $thumbnail = $category->thumbnail;
        if($request->hasFile('thumbnail'))
        {
            // $thumbnail = str()->random(10).'-'.time().'.'.$request->thumbnail->extension();
            $request->thumbnail->storeAs('public/categories',$thumbnail);
        }
        $validate['thumbnail'] = $thumbnail;
        Category::where('id',$category->id)->update($validate);
        // unlink(storage_path('app/public/categories/'.$thumbnail));
        return redirect()->route('category.index')->with('success','Category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->delete())
        {
            @unlink(storage_path('app/public/categories/'.$category->thumbnail));
            if(request()->ajax())
            {
                return response()->json(['success'=>'Category deleted successfully.']);
            }
            return redirect()->back()->with('success','Category deleted successfully.');
        }
        
        if(request()->ajax())
        {
            return response()->json(['error'=>'Failed to delete category.']);
        }
        return redirect()->back()->with('error','Failed to delete category.');

        // File::delete(storage_path('app/public/categories/'.$category->thumbnail));
        // Storage::delete('public/categories/'.$category->thumbnail);
    }

    public function validateCategory($request,$type,$category = null)
    {
        return $request->validate([
            'name' => ['required','max:100'],
            'slug' => ['required','unique:categories,slug'.($type == 'update' ? ','.$category : '')],
            'status' => ['nullable','in:0,1'],
            'thumbnail' => [$type == 'update' ? 'nullable' : 'required','image']
        ]);
    }

}
