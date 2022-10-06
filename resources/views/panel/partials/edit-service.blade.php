<form id="formServiceUpdate" method="POST" action="{{route('services.update',$service->id)}}"
    enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Título</span>
        <input required name="title" type="text" class="form-control" value="{{ $service->title }}">
    </div>
    <div class="form-row mb-4">
        <span>Imagen (720x830)</span>
        <input name="image" type="file" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Descripción</span>
        <textarea required name="description" type="text" class="form-control" rows="4">{{ $service->description }}
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>