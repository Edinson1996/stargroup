<form id="formClientUpdate" method="POST" action="{{route('clients.update',$image->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Imagen (225x110)</span>
            <input name="name" type="file" class="form-control">
    </div>
    <input type="hidden" name="code" value="clients">
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>
