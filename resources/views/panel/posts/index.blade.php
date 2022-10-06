@extends('layouts.panel')
@push('css')
    <link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" />
@endpush
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block mb-3">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                    <a href="{{ route('posts.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                <table id="postsTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th width="600px">Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('admin/plugins/table/datatable/datatables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
    <script>
        let postTable = tableOne(
            "postsTable",
            "{{route('posts.table')}}",
            [
                {data: 'id'},
                {data: 'title'},
                {data: 'description'},
                {data: 'image',orderable:false},
                {data: 'actions',orderable:false},
            ]
        );
    </script>
@endpush


