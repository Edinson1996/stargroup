<form method="POST" action="{{route('banners.update',$banner->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @if ($banner->header)
    <div class="form-row mb-4">
        <span>Header</span>
        <input required name="header" type="text" class="form-control" value="{{ $banner->header }}">
    </div>
    @endif
    @if ($banner->title)
    <div class="form-row mb-4">
        <span>Título</span>
        <input required name="title" type="text" class="form-control" value="{{ $banner->title }}">
    </div>
    @endif
    @if ($banner->type)
        <div class="form-row mb-4">
            <span>{{$banner->type=='image' ? "Imagen ($banner->width x $banner->height)" : 'Video'}}</span>
            <input name="file" type="file" class="form-control">
        </div>
    @endif
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>