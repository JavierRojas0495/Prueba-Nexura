
<form rule="formEditarProducto" name="formEditarProducto" id="formEditarProducto" action="postEditarProducto" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">
        <div class="form-group">
                <h1 class="page-header">Editar Producto</h1>
        </div>
        
        <div class="form-group col-md-7 col-lg-7" style="background-color: #BFF3F7">
            <h3> Los campos con asteriscos (*) son obligatorios</h3>
        </div>
        
        <?php foreach ($datos as $key => $value) { ?>

             <input type="hidden" name="idproducto" id="idproducto" value="<?php echo $value['id_prod']; ?>">

        <div class="form-group col-xl-12 col-md-12 row">
          
            <div class="form-group col-xl-5 col-md-5">
                <label>Imagen Del Producto </label>
                <div>
                    <img id="imagenPrevisualizacion" style=" width: 150px; height: auto " src="<?php echo $value['ruta_img']; ?>" />
                </div>
                <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                <p class="help-block">Cambiar imagen del producto.</p>
            </div>

        </div>

        <div class="input-group"> 

            <div class="form-group col-xl-5 col-md-5">
                <label>Nombre Producto *</label>
                <input class="form-control" name="nom_producto" id="nom_producto" placeholder="Producto" type="text" value="<?php echo $value['prod_nombre']; ?>" required="required">
                <p class="help-block">Nombre del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Referencia Producto *</label>
                <input class="form-control" name="ref_producto" id="ref_producto" placeholder="Referencia" type="text" value="<?php echo $value['prod_referencia']; ?>" required="required">
                <p class="help-block">Referencia del producto.</p>
            </div>
             
         </div>

        
        <div class="form-group col-xl-12 col-md-12 row">
          
            <div class="form-group col-xl-5 col-md-5">
                <label>Precio Producto *</label>
                <input class="form-control" name="prec_producto" id="prec_producto" placeholder="Precio" type="number" value="<?php echo $value['prod_precio']; ?>" required="required">
                <p class="help-block">Precio del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Peso Producto *</label>
                <input class="form-control" name="peso_producto" id="peso_producto" placeholder="peso_producto" type="number" value="<?php echo $value['prod_peso']; ?>" required="required">
                <p class="help-block">Peso del producto.</p>
            </div>
        
        </div>
        
        <div class="form-group col-xl-12 col-md-12 row">
          
            
            <div class="form-group col-xl-5 col-md-5 form-area">
                <label>Categoria *</label>
                <select class="form-control form-select" aria-label="Default select example" id="cat_producto" name="cat_producto" placeholder="Area" required="required">
                    <?php foreach ($categorias as $key => $val) { ?>
                        <option value="<?php echo $val['id']; ?>" <?php if($value['categoria'] == $val['id']){ echo 'selected="selected"'; } ?>><?php echo $val['nombre']; ?></option>
                    <?php } ?>
                </select>
                <p class="help-block">Categoria del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Stock Producto (Cantidad) *</label>
                <input class="form-control" name="stock_producto" id="stock_producto" placeholder="Stock" type="number" value="<?php echo $value['prod_stock']; ?>" required="required">
                <p class="help-block">Stock del producto.</p>
            </div>
        
        </div>
        
    <?php } ?>      
        
        <div class="input-group">  
            <div class="form-group col-md-5">
                <input type='button' class='btn btn-success btnEditarProducto' value='Guardar' onclick='postProducto("editar")'>
            </div>
        </div>
    </div>
</form>

