<form method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Imagen (225x110)</span>
        <input required name="name" type="file" class="form-control">
    </div>
    <input type="hidden" name="code" value="clients">
    <button type="submit" class="btn btn-primary mb-4">Crear</button>
</form>