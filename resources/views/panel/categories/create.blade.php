<form method="POST" action="{{route('categories.store')}}">
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Nombre</span>
        <input required name="name" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Crear</button>
</form>