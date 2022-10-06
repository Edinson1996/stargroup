<form id="formTrashProduct{{$id}}" action="{{ route('products.trash', $id) }}" method="POST">
    @csrf
    @method('PATCH')
    <button
        type="button"
        onclick="modal('{{route('products.edit', $id)}}','Editar Producto',700)"
        class="btn btn-outline-primary btn-sm">
        <i class="fas fa-edit"></i>
    </button>
    <button
        type="button"
        onclick="deleteRegister('formTrashProduct{{$id}}','Product','¿Está seguro de eliminar el producto? El producto será enviado a la papelera de reciclaje')"
        class="btn btn-outline-danger btn-sm">
        <i class="fas fa-trash"></i>
    </button>
</form>