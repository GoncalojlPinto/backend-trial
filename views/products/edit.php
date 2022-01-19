<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="modal-body">
        <div class="form-group row p-1">
            <label for="name" class="col-md-3 col-form-label text-md-right"></label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required autofocus>
            </div>
        </div>
        <div class="form-group row p-1">
            <label for="categories" class="col-md-3 col-form-label text-md-right">Categories: </label>
            <div class="col-md-9">
                <input type="text" name="categories" class="form-control" value="<?php echo $product['categories']; ?>" required autofocus>
            </div>
        </div>
        <div class="form-group row p-1">
            <label for="price" class="col-md-3 col-form-label text-md-right">Price: </label>
            <div class="col-md-9">
                <input type="text" name="price" class="form-control" value="<?php echo $product['price']; ?>" required autofocus>
            </div>
        </div>
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
            <button type="submit" class="btn btn-primary">editar</button>
        </div>
</form> 