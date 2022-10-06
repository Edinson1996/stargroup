<form method="POST" action="{{route('sections.update',$section->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @if ($section->header)
    <div class="form-row mb-4">
        <div class="col">
            <span>Header</span>
            <input required name="header" type="text" class="form-control" value="{{ $section->header }}">
        </div>
    </div>
    @endif
    @if ($section->title)
    <div class="form-row mb-4">
        <div class="col">
            <span>Título</span>
            <input required name="title" type="text" class="form-control" value="{{ $section->title }}">
        </div>
    </div>
    @endif
    @if ($section->description)
    <div class="form-row mb-4">
        <div class="col">
            <span>Descripción</span>
            <textarea required name="description" type="text" class="form-control" rows="3">{{ $section->description }}
                </textarea>
        </div>
    </div>
    @endif
    @if ($section->image)
    <div class="form-row mb-4">
        <div class="col">
            @if ($section->name == 'about')
            <span>Imagen (1500x550)</span>
            @endif
            @if ($section->name == 'contact')
            <span>Imagen (80x80)</span>
            @endif
            @if ($section->name == 'teams')
            <span>Imagen (1500x860)</span>
            @endif
            <input name="image" type="file" class="form-control">
        </div>
    </div>
    @endif
    <div class="form-row mb-4">
        <div class="col">
            <span>Visible:</span><br>
            <label for="radio1">Sí</label>
            <input type="radio" name="state" id="radio1" value="1" {{$section->state ? 'checked' : ''}}>
            <label for="radio2">No</label>
            <input type="radio" name="state" id="radio2" value="0" {{!$section->state ? 'checked' : ''}}>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>