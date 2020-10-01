<!-- formulario de alta de tarea -->
<form action="insertar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto</label>
                <input name="product" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Precio</label>
                <input name="price" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="descripcion" class="form-control" rows="3"></textarea>
    </div>

    <input type="submit" class="btn btn-info mt-2" value="Insertar">
</form>
