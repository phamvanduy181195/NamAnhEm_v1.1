@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="page-header">
            <h2 class="header-title">Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin::category.index') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>List</a>
                    <span class="breadcrumb-item active">Create category</span>
                </nav>
            </div>
        </div>
        <div class="col-md-12 card">
            {!! Form::model($model, ['route' => 'admin::category.store', 'id' => 'form-category', 'role' => 'form']) !!}
            <div class="card-header">
                <h5 class="card-title">Create Category</h5>
                <div class="float-right">
                    <button class="btn btn-gradient-success">Submit</button>
                </div>
            </div>
            <div class="card-body">
                @include('admin.layout.message')
                @include('admin.category._form')
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
