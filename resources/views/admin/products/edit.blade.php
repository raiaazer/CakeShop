@extends('admin.layouts.layout')

@section('body')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Product</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Product</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @include('admin.includes.alert-message')
                        <form class="row" method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-lg-6 form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name',$product->name) }}" class="form-control input-default " placeholder="Product Name">
                                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{ old('slug',$product->slug) }}" class="form-control input-rounded" placeholder="Product Slug">
                                @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-12 form-group">
                                <label>Description</label>
                                <textarea rows="10" name="description" class="form-control input-default " placeholder="Product Description">{{ old('description',$product->description) }}</textarea>
                                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Price</label>
                                <input type="text" name="price" value="{{ old('price',$product->price) }}" class="form-control input-default " placeholder="Product Price">
                                @error('price') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" value="{{ old('quantity',$product->quantity) }}" class="form-control input-default " placeholder="Product quantity">
                                @error('quantity') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Discount Type</label>
                                <select name="discount_type" class="form-control form-control-lg default-select ">
                                    <option value="">Discount Type</option>
                                    <option {{ !old('discount_type') && $product->discount_type == 'flat' ? 'selected' : '' }} {{ old('discount_type') == 'flat' ? 'selected' : '' }} value="flat">Flat</option>
                                    <option {{ !old('discount_type') && $product->discount_type == 'percentage' ? 'selected' : '' }} {{ old('discount_type') == 'percentage' ? 'selected' : '' }} value="percentage">Percentage</option>
                                </select>
                                @error('discount_type') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Discount</label>
                                <input type="text" name="discount" value="{{ old('discount',$product->discount) }}" class="form-control input-rounded" placeholder="Product Discount">
                                @error('discount') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            @php
                            $curStatus = $product->status;
                            if(old('status'))
                            {
                                $curStatus = old('status');
                            }
                            @endphp
                            <div class="col-lg-6 form-group">
                                <label>Product Status</label>   
                                <select name="status" class="form-control form-control-lg default-select ">
                                    <option value="">Status</option>
                                    <option {{ $curStatus == '1' ? 'selected' : '' }} value="1">Enable</option>
                                    <option {{ $curStatus == '0' ? 'selected' : '' }} value="0">Disable</option>
                                </select>
                                @error('status') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Product Images</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary btn-sm" type="button">Images</button>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" multiple name="images[]" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                @error('images') <p class="text-danger">{{$message}}</p> @enderror
                            </div>

                            @php
                            $curCate = $product->category_id;
                            if(old('category_id'))
                            {
                                $curCate = old('category_id');
                            }
                            @endphp
                            <div class="col-lg-6 form-group">
                                <label>Categorty</label>
                                <select name="category_id" class="form-control form-control-lg default-select ">
                                    <option value="">Product Category</option>
                                    @foreach ($categories as $category)
                                    <option {{ $curCate == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-12 form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
