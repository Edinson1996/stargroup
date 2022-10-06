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
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>¿Visible?</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$section->title}}</td>
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
            <h3>Estadísticas</h3>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cantidad</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($statisticsn as $item)
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
            <h3>Características</h3>
            <div class="table-responsive mb-4 mt-4">
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($statistics as $item)
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
@endsection