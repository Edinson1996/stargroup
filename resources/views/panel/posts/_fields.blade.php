@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="name">Título:</label>
    <input required type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>
<div class="form-group">
    <label for="description">Descripción:</label>
    <input required type="text" class="form-control" name="description" id="description" value="{{ old('description', $post->description) }}">
</div>
<div class="form-group">
    <label for="category_id">Categoría:</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Selecciona una categoría</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{ old('category_id', $post->category_id) == $category->id ? ' selected' : '' }}>{{$category->name}}</option>
        @endforeach
    </select>
</div>
<input type="hidden" class="form-control" name="body" id="body">
<div class="form-group">
    <label>Contenido:</label>
    <div id="wContent">
        {!!$post->body!!}
    </div>
</div>
<div class="form-group">
    <label for="idea">Idea a resaltar (Opcional):</label>
    <input type="text" class="form-control" name="idea" id="idea" value="{{ old('idea', $post->idea) }}">
</div>
<div class="form-group">
    <label for="image">Imagen (1350x850)</label>
    <input class="form-control" type="file" name="image" id="image">
</div>
<div class="form-group">
    <label for="video">Clave Youtube</label>
    <input class="form-control" type="text" name="video" id="video" value="{{$post->video}}">
</div>
<div class="form-group">
    <label for="video">pdf</label>
    <input class="form-control" type="file" name="archivo" id="archivo" value="{{$post->archivo}}">
</div>
@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#wContent', {
            theme: 'snow'
        });
    </script>
    <script>
        function sendForm(formId){
            document.getElementById("body").value=quill.container.firstChild.innerHTML;
            $("#"+formId).submit();
        }
    </script>
@endpush
