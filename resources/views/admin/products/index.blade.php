@extends('admin.layouts.layout',[
    'use' => array_merge($use,['delete'])
])

@section('body')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Products</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products Listing</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.alert-message')
                    <div class="table-responsive">
                        <table id="datatable" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Price</th>
                                    <th>Discount Type</th>
                                    <th>Discount Value</th>
                                    <th>Actual Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img width="50px" src="{{ $product->getImages()->first() }}" alt="">
                                        {{ $product->name }}
                                    </td>
                                    <td>{{ $product->slug }}</td>
                                    <td>{{ priceFormat($product->price) }}</td>
                                    <td>{{ $product->discountType() }}</td>
                                    <td>{{ $product->discountValue() }}</td>
                                    <td>{{ priceFormat($product->actualPrice()) }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <button data-delete-url="{{ route('product.destroy',$product->id) }}" data-ajax="true" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Price</th>
                                    <th>Discount Type</th>
                                    <th>Discount Value</th>
                                    <th>Actual Price</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--  --}}

@endsection

@section('script')
<script>
    $("#datatable").DataTable();
</script>
@endsection
