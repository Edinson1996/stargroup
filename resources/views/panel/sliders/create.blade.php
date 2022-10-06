<form method="POST" action="{{route('sliders.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Título</span>
        <input required name="title" type="text" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Imagen (1920x1080)</span>
        <input required name="image" type="file" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Botón</span>
        <input required name="button_title" type="text" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Url</span>
        <input required name="button_url" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Crear</button>
</form>