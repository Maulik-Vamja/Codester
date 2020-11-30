@extends('layouts.backend.app')

@section('pageTitle')
    Category
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
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    {{-- @can('add-category', Auth::user()) --}}
                        <a href=" {{ route('admin.category.create') }} " class="btn btn-outline-blue btn-rounded waves-effect waves-light mb-2 "  style="text-transform: capitalize;">
                            <i class="fe-plus"></i> Add Categorie</a>
                            @if (session('succesMsg'))
                            <div class="alert alert-success" id="success-alert" role="alert">
                                {{ session('succesMsg') }}
                            </div>
                            @endif
                    {{-- @endcan --}}

                    <table id="basic-datatable" class="table dt-responsive table-striped table-centered">
                        <thead class="thead-light">
                            <tr>
                                <th style="hidden">#</th>
                                <th>Categorie Name</th>
                                <th>Slug</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->name }}</td>
                                    <td>{{ $categorie->slug }}</td>
                                    {{-- <td>
                                        <button class="btn status-change  {{$categorie->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$categorie->status==1 ? 'Active':'Disable'}}" >{{$categorie->status== 1 ? "Active" : "Disable"}}</button>
                                    </td> --}}
                                    <td> 
                                        <a href=" {{ route('admin.category.delete',$categorie->id) }} " class="mr-1 text-danger remove_categorie" title="Delete Categorie" ><i class="fe-trash"></i></a>
                                        {{-- @can('update-category', Auth::user()) --}}
                                            <a href=" {{ route('admin.category.edit',$categorie->id) }} " class="mr-1 text-primary update_categorie" title="Update Categorie" ><i class="fe-edit"></i></a>
                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $html->table(['id' => 'product-viewselection-datatable', 'class' => 'table dt-responsive nowrap w-100', true]) }} --}}
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>
@endsection
@section('pageModel')
    <div id="categorie-add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <span><h4 class="modal-title">Create New Category</h4></span>
                    </div>

                    <form id="categorieAdd" action="{{ route('admin.category.store') }}" method="POST" class="px-3">
                        @csrf
                        <div class="form-group">
                            <label for="categorie-name">Categorie Name</label>
                            <input class="form-control" type="text" id="categorie_name" required="" name="categorie_name" placeholder="Enter Category Name">
                            <input type="hidden" id="table_id" name="table_id" value="0">
                        </div>

                        <div class="form-group text-right">
                            <button class="btn btn-blue btn-rounded waves-effect waves-light btn-xs" type="submit">Save</button>
                            <button class="btn btn-danger btn-rounded waves-effect waves-light btn-xs" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('middleJs')
    
<script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <!-- third party js ends -->
    {{-- {{ $html->scripts() }} --}}
    <!-- Datatables init -->
    <script src="{{ asset('assets/backend/js/pages/datatables.init.js')}}"></script>
    <script type="text/javascript">
        $(".update_categorie").click(function() {
            var row = $(this).closest("tr");
            $("#table_id").val(row.find("td:nth-child(1)").text());
            $("#categorie_name").val(row.find("td:nth-child(2)").text());
            $("#categorie-add-modal").modal('show');
            $(".modal-title").html("Update Category");
        });

        $('#categorie-add-modal').on('hidden.bs.modal',function() {
            /*Clear all input type="text" box*/
            $('#categorieAdd input[type="text"]').val('');
            $('#categorieAdd input[type="hidden"]').val('0');
            $(".modal-title").html("Create New Category");
        });

        $('#categorieAdd').on('submit', function(e) {
            e.preventDefault();
            var table_id = $('#table_id').val();
            if(table_id != 0){
                var title = "Update!";
                var text = "Categorie has been updated.";
            }else{
                var title = "Insert!";
                var text = "New Categorie has been inserted.";
            }
            $.ajax({
                url: '{{route('admin.category.store')}}',
                type: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                dataType: 'JSON',
                success: function(response_msg) {
                    if (response_msg.success == true){
                        window.location.reload();
                        // swal.fire({
                        //     title: title,
                        //     text: text,
                        //     icon:'success',
                        //     showCancelButton: false,
                        //     showConfirmButton: false,
                        //     timer: 1000,
                        // });
                        $('#categorie-add-modal').modal('toggle');
                    }else{
                        // var err_msg = "";
                        // $.each(response_msg.errors, function( key, value ) {
                        //     err_msg += value;
                        // });
                        // swal.fire({
                        //     title: title,
                        //     text: err_msg,
                        //     icon:'error',
                        //     showCancelButton: false,
                        //     showConfirmButton: false,
                        //     timer: 1000,
                        // });
                    }
                }
            });

        });
    </script>

@endsection

