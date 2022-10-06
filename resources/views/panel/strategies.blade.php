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
                            <th>Header</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>¿Visible?</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$section->header}}</td>
                            <td>{{$section->title}}</td>
                            <td>{{$section->description}}</td>
                            <td>{{$section->state ? 'Sí' : 'No'}}</td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('sections.edit',$section)}}','Editar Sección {{$section->header}}')"
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
                <h3>Estrategias</h3>
                <table id="productsTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Título</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($strategies as $strategy)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$strategy->header}}</td>
                            <td>{{$strategy->title}}</td>
                            <td><img src="{{asset('strategies/'.$strategy->image)}}" width="200px" alt="team-img"></td>
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('strategies.edit',$strategy)}}','Editar Estrategia {{$loop->index+1}}',800)"
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




















































{{-- @extends('layouts.panel')
@push('css')
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
<!-- style sheets and font icons  -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-icons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
<!-- revolution slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}">
@endpush
@section('content')
<div class="layout-px-spacing">
    @livewire('strategies')
</div>
@endsection --}}