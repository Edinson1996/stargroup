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
                <button onclick="modal('{{route('sliders.create')}}','Registrar Nuevo Slider',1000)"
                    class="btn btn-primary mb-3"><i class="fas fa-plus"></i></button>
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Slide</th>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th class="text-center">Botón</th>
                            <th>Url</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><img src="{{asset('slider/'.$slider->image)}}" width="200px" alt="slider-img"></td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->button_title}}</td>
                            <td>{{$slider->button_url}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('sliders.edit',$slider)}}','Editar Slider {{$slider->id}}',800)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                                <form id="slider{{$slider->id}}" method="post"
                                    action="{{route('sliders.delete',$slider)}}">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <button onclick="deleteSlider({{$slider->id}})" type="button"
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
    function deleteSlider(id){
            bootbox.confirm({
        message: "¿Está seguro de eliminar el slider?",
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
                $("#slider"+id).submit();
            }
        },
    });
        }
</script>
@endpush