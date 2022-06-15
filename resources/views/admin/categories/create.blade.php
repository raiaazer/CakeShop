@extends('admin.layouts.layout')
@section('body')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Category</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Category</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @include('admin.includes.alert-message')
                        @include('admin.categories.category_form',[
                            'type' => 'create'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
