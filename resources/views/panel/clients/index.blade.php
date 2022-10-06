@extends('layouts.panel')
@push('css')
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/dt-global_style.css">
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
                <button onclick="modal('{{route('clients.create')}}','Registrar Nuevo Cliente',700)"
                    class="btn btn-primary mb-3"><i class="fas fa-plus"></i></button>
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><img src="{{asset('images/'.$client->name)}}" width="200px" alt="slider-img"></td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('clients.edit',$client)}}','Editar Cliente',700)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                                <form id="client{{$client->id}}" method="post"
                                    action="{{route('clients.delete',$client)}}">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <button onclick="deleteClient({{$client->id}})" type="button"
                                    class="btn btn-round-edge btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function deleteClient(id){
            bootbox.confirm({
        message: "¿Está seguro de eliminar el cliente?",
        buttons: {
            cancel: {
                label: "Cancelar",
                className: "btn btn-warning  btn-sm",
            },
            confirm: {
                label: "Eliminar",
                className: "btn btn-danger btn-sm",
            },
        },
        callback: function (result) {
            if (result) {
                $("#client"+id).submit();
            }
        },
    });
        }
</script>
@endpush