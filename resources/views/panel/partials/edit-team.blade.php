<form id="formProductUpdate" method="POST" action="{{route('teams.update',$team->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
        <span>Título</span>
        <input required name="title" type="text" class="form-control" value="{{ $team->title }}">
    </div>
    <div class="form-row mb-4">
        <span>Imagen (444x444)</span>
        <input name="image" type="file" class="form-control">
    </div>
    <div class="form-row mb-4">
        <span>Descripción</span>
        <textarea required name="description" type="text" class="form-control" rows="2">{{ $team->description }}
        </textarea>
    </div>
    <div class="form-row mb-4">
        <span>Título Bajo</span>
        <input required name="foot_title" type="text" class="form-control" value="{{ $team->foot_title }}">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>