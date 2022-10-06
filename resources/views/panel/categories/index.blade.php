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
                <button onclick="modal('{{route('categories.create')}}','Registrar Nuevo categoría',1000)"
                    class="btn btn-primary mb-3"><i class="fas fa-plus"></i></button>
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$category->name}}</td>
                            <td class="text-center">
                                <div class="form-inline">
                                    <button
                                    onclick="modal('{{route('categories.edit',$category)}}','Editar categoría',800)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                                <form id="category{{$category->id}}" method="post"
                                    action="{{route('categories.delete',$category)}}">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <button onclick="deleteCategory({{$category->id}})" type="button"
                                    class="btn btn-round-edge btn-outline-danger ml-1">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No Data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function deleteCategory(id){
            bootbox.confirm({
        message: "¿Está seguro de eliminar la categoría?",
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
                $("#category"+id).submit();
            }
        },
    });
        }
</script>
@endpush