@extends('layouts.backend.app')

@section('pageTitle')
    Add Category
@endsection

@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a></li>
                        <li class="breadcrumb-item active">@yield('pageTitle')</li>
                    </ol>
                </div>
                <h4 class="page-title">@yield('pageTitle')</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6     col-sm-12 col-xs-12 col-md-12 mx-auto">
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="categorie-name">Categorie Name</label>
                                    <input class="form-control" type="text" id="categorie_name" required="" name="categorie_name" placeholder="Enter Category Name">
                                    <input type="hidden" id="table_id" name="table_id" value="0">
                                </div>
        
                                <div class="form-group text-right">
                                    <button class="btn btn-blue btn-rounded waves-effect waves-light btn-xs" type="submit">Save</button>
                                    <a href=" {{ route('admin.category') }} " class="btn btn-danger btn-rounded waves-effect waves-light btn-xs" type="button" data-dismiss="modal">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
        </div> <!-- end col -->
        </form>
    </div>
</div>

@endsection
