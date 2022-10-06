@extends('layouts.panel')
@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <h3 class="mb-4">Editar Post</h3>
            <form id="formPostUpdate" method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                @include('panel.posts._fields')

                <div class="form-group mt-4">
                    <button type="button" onclick="sendForm('formPostUpdate')" class="btn btn-dark">Actualizar</button>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection
