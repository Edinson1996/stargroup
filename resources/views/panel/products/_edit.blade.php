<div class="card m-md-5">
    <div class="card-body">
        <form id="formProductUpdate" method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}">
            </div>

            <div class="form-group">
                <label for="price">Precio (S/):</label>
                <input type="number" step=0.01 class="form-control" name="price" id="price"
                    value="{{ number_format($product->price,2) }}">
            </div>

            <div class="form-group">
                <label for="offer">¿El producto está en oferta?</label>
                <select class="form-control" id="offer" name="offer">
                    <option value="1">Sí</option>
                    <option value="0" {{!$product->offer ? 'selected' : ''}}>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group mt-4">
                <button type="button" onclick="update('Product')" class="btn btn-primary">Actualizar producto</button>
            </div>
        </form>
    </div>
</div>