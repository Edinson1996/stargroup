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
                <h3>Banners</h3>
                <table class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Título</th>
                            <th class="text-center">Archivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->header ?: '---'}}</td>
                            <td>{{$item->title ?: '---'}}</td>
                            @if ($item->type=='image')
                                <td class="text-center"><img src="{{asset('banners/'.$item->file)}}" width="200px" alt="img"></td>
                            @endif
                            @if ($item->type=='video')
                                <td class="text-center">
                                    <a class="btn btn-round-edge btn-outline-primary" target="_blank" href="{{"/banners/".$item->file}}"><i class="far fa-play-circle"></i></a>
                                </td>
                            @endif
                            @if (!$item->type=='video')
                                <td class="text-center">---</td>
                            @endif
                            <td class="text-center">
                                <button
                                    onclick="modal('{{route('banners.edit',$item)}}','Editar',700)"
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