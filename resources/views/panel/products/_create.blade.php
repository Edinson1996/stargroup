<div class="card m-md-5">
    <div class="card-body">
        <form id="formProductStore" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="price">Precio (S/):</label>
                <input type="number" step=0.01 class="form-control" name="price" id="price">
            </div>

            <div class="form-group">
                <label for="offer">¿El producto está en oferta?</label>
                <select class="form-control" id="offer" name="offer">
                    <option value="1">Sí</option>
                    <option value="0" selected>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group mt-4">
                <button type="button" onclick="store('Product')" class="btn btn-primary">Crear Producto</button>
            </div>
        </form>
    </div>
</div>