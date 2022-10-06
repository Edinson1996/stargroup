@extends('layouts.panel')
@push('css')
    <link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" />
@endpush
@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <div class="d-flex justify-content-between mb-2">
                    @if ($view == 'index')
                        <button onclick="modal('{{route('products.create')}}','Registrar Nuevo Producto',1000)" class="btn btn-primary"><i class="fas fa-plus"></i></button>  
                        <a href="{{ route('products.trashed') }}" class="btn btn-outline-secondary">Ver papelera</a>
                    @else
                        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Regresar al listado de productos</a>
                    @endif
                </div> 
                <table id="productsTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>¿Oferta?</th>
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
        let productTable = tableOne(
            "productsTable",
            @if($view=='index')
                "{{route('products.table')}}",
            @else
                "{{route('products.trashedTable')}}",
            @endif
            [
                {data: 'id'},
                {data: 'name'},
                {data: 'price',class:"text-center",render: function(price){
                        return "S/ "+parseFloat(price).toFixed(2);
                    }},
                {data: 'offer',class:"text-center",render: function(offer){
                    return offer ? 'Si' : 'No';
                }},
                {data: 'image',orderable:false},
                {data: 'actions',orderable:false},
            ]
        );
    </script>
@endpush



