@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="page-header">
            <h2 class="header-title">Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <span class="breadcrumb-item active"><i class="ti-home p-r-5"></i>List</span>
                </nav>
            </div>
        </div>
        <div class="col-md-12">
            @include('admin.layout.message')
            <div class="card">
                {!! Form::open(['route' => 'admin::category.update-category', 'id' => 'form-category-index']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label control-label">Category type</label>
                                <div class="col-md-9">
                                    <select id="category-select-type" class="form-selectize" style="float: left;">
                                        <option value="" disabled selected>Select category type</option>
                                        @foreach($categoryType as $key=>$value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="float-right">
                                <button type="button"
                                        class="btn btn-default"
                                        id="btn-add-category"
                                        data-url="{{ route('admin::category.create') }}">
                                    Add category
                                </button>
                                <button class="btn btn-gradient-success" type="button" id="submit-category-index">
                                   {{ __('layout.save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-hover table-xl">
                            <thead>
                            <tr>
                                <th class="text-center">Position</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="content-category-table">

                            </tbody>
                        </table>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@include('admin.category.elements.footer')
