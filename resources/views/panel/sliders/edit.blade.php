<form id="formSliderUpdate" method="POST" action="{{route('sliders.update',$slider->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
            <span>Título</span>
            <input required name="title" type="text" class="form-control" value="{{ $slider->title }}">
    </div>
    <div class="form-row mb-4">
        <span>Imagen (1920x1080)</span>
            <input name="image" type="file" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Botón</span>
        <input required name="button_title" type="text" class="form-control" value="{{ $slider->button_title }}">
    </div>
    <div class="form-row mb-4">
        <span>Url</span>
            <input required name="button_url" type="text" class="form-control" value="{{ $slider->button_url }}">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>
