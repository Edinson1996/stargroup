@extends('layouts.panel')
@push('css')
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="/admin/plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"
    integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA=="
    crossorigin="anonymous" />
@endpush
@section('content')

{{-- <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <h3>Sección</h3>
                    <table id="productsTable" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Header</th>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$section->header}}</td>
<td>{{$section->title}}</td>
<td><img src="{{asset('sections/'.$section->image)}}" width="200px" alt="team-img"></td>
<td class="text-center">
    <button onclick="modal('{{route('sections.edit',$section)}}','Editar Sección {{$section->header}}')"
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
</div> --}}

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
                            <th>Header</th>
                            <th>Título</th>
                            <th>¿Visible?</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$section->header}}</td>
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
            <div class="table-responsive mb-4 mt-4">
                <h3>Servicios</h3>
                <table id="productsTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td><img src="{{asset('services/'.$service->image)}}" width="200px" alt="team-img"></td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('services.edit',$service)}}','Editar Servicio {{$loop->index+1}}',700)"
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