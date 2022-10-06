<form id="formCategoryUpdate" method="POST" action="{{route('categories.update',$category->id)}}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-row mb-4">
            <span>Nombre</span>
            <input required name="name" type="text" class="form-control" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
</form>
