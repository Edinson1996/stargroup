@extends('layouts.panel')
@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3 class="mb-4">Nuevo Post</h3>
            <form id="formPostStore" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                @include('panel.posts._fields')
                <div class="form-group mt-4">
                    <button type="button" onclick="sendForm('formPostStore')" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


