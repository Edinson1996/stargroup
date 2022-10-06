<form id="formStrategyUpdate" method="POST" action="{{route('strategies.update',$strategy->id)}}"
    enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Header</span>
        <input required name="header" type="text" class="form-control" value="{{ $strategy->header }}">
    </div>
    <div class="form-row mb-4">
        <span>Título</span>
        <input required name="title" type="text" class="form-control" value="{{ $strategy->title }}">
    </div>
    <div class="form-row mb-4">
        <span>Imagen (370x370)</span>
        <input required name="image" type="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>