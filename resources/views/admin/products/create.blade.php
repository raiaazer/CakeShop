@extends('admin.layouts.layout')

@section('body')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Product</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @include('admin.includes.alert-message')
                        <form class="row" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control input-default " placeholder="Product Name">
                                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control input-rounded" placeholder="Product Slug">
                                @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-12 form-group">
                                <textarea rows="10" name="description" class="form-control input-default " placeholder="Product Description">{{ old('description') }}</textarea>
                                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control input-default " placeholder="Product Price">
                                @error('price') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control input-default " placeholder="Product quantity">
                                @error('quantity') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <select name="discount_type" class="form-control form-control-lg default-select ">
                                    <option value="0">Discount Type</option>
                                    <option {{ old('discount_type') == '1' ? 'selected' : '' }} value="1">Flat</option>
                                    <option {{ old('discount_type') == '0' ? 'selected' : '' }} value="0">Percentage</option>
                                </select>
                                @error('discount_type') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="text" name="discount" value="{{ old('discount') }}" class="form-control input-rounded" placeholder="Product Discount">
                                @error('discount') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <select name="status" class="form-control form-control-lg default-select ">
                                    <option value="0">Status</option>
                                    <option {{ old('status') == '1' ? 'selected' : '' }} value="1">Enable</option>
                                    <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Disable</option>
                                </select>
                                @error('status') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary btn-sm" type="button">Thumbnail</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="thumbnail[]" multiple class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @error('thumbnail') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-lg-6 form-group">
                                <select name="category_id" class="form-control form-control-lg default-select ">
                                    <option value="">Product Category</option>
                                    @foreach ($categories as $category)
                                    <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-12 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
