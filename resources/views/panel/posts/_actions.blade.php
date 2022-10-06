<form id="formDeletePost{{$id}}" action="{{ route('posts.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <a
        href="{{route('posts.edit', $id)}}"
        class="btn btn-outline-primary btn-sm">
        <i class="fas fa-edit"></i>
    </a>
    <button
        type="button"
        onclick="deleteRegister('formDeletePost{{$id}}','Post','¿Está seguro de eliminar el post?')"
        class="btn btn-outline-danger btn-sm">
        <i class="fas fa-trash"></i>
    </button>
</form>