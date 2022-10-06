<form method="POST" action="{{route('about.update',$about->id)}}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @if($about->column_1)
        <div class="form-row mb-4">
            <span>Título</span>
            <input required name="column_1" type="text" class="form-control" value="{{ $about->column_1 }}">
        </div>
    @endif
    <div class="form-row mb-4">
        <span>Contenido</span>
        <textarea required name="column_2" type="text" class="form-control" rows="4">{{ $about->column_2 }}
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>