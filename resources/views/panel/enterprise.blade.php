@extends('layouts.panel')
@push('css')
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"
    integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA=="
    crossorigin="anonymous" />
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
                <h3>Sección</h3>
                <table id="productsTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>¿Visible?</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$section->state ? 'Sí' : 'No'}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('sections.edit',$section)}}','Editar Sección',900)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3>Principios</h3>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($principles as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->column_1}}</td>
                            <td>{{$item->column_2}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('enterprise.edit',$item)}}','Editar',700)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
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

<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3>Objetivos</h3>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($objetives as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->column_1}}</td>
                            <td>{{$item->column_2}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('enterprise.edit',$item)}}','Editar',700)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
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

<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3>Misión/Visión</h3>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Misión</td>
                            <td>{{$mision->column_2}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('enterprise.edit',$mision)}}','Editar',700)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Visión</td>
                            <td>{{$vision->column_2}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('enterprise.edit',$vision)}}','Editar',700)"
                                    class="btn btn-round-edge btn-outline-primary">
                                    <i class="far fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3>Libro de Reclamaciones</h3>
            <form class="mt-4" method="POST" action="{{ route('complaintsBook') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
    
                <div class="form-group">
                    <label for="book">Cargar PDF</label>
                    <input class="form-control" type="file" name="file">
                </div>

                <div class="form-row mb-4">
                    <div class="col">
                        <span>Visible:</span><br>
                        <label for="radio1">Sí</label>
                        <input type="radio" name="state" id="radio1" value="1" {{$book->state ? 'checked' : ''}}>
                        <label for="radio2">No</label>
                        <input type="radio" name="state" id="radio2" value="0" {{!$book->state ? 'checked' : ''}}>
                    </div>
                </div>
    
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar Libro</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection