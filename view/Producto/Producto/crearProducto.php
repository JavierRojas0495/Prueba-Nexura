
<form rule="formCrearProducto" name="formCrearProducto" id="formCrearProducto" action="postCrearProducto" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">
        <div class="form-group">
                <h1 class="page-header">Crear Producto</h1>
        </div>
        
        <div class="form-group col-md-7 col-lg-7" style="background-color: #BFF3F7">
            <h3> Los campos con asteriscos (*) son obligatorios</h3>
        </div>

        <div class="form-group col-xl-12 col-md-12 row">
          
            <div class="form-group col-xl-5 col-md-5">
                <label>Imagen Del Producto </label>
                <div>
                    <img id="imagenPrevisualizacion" style=" width: 150px; height: auto "></img>
                </div>
                <input type="file" name="image" id="image" class="form-control-file" accept="image/png,image/jpeg">
                <p class="help-block">Cambiar imagen del producto.</p>
            </div>

        </div>
         
        <div class="input-group">   

            <div class="form-group col-xl-5 col-md-5">
                <label>Nombre Producto *</label>
                <input class="form-control" name="nom_producto" id="nom_producto" placeholder="Producto" type="text" required="required">
                <p class="help-block">Nombre del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Referencia Producto *</label>
                <input class="form-control" name="ref_producto" id="ref_producto" placeholder="Referencia" type="text" required="required">
                <p class="help-block">Referencia del producto.</p>
            </div>
             
         </div>

        
        <div class="form-group col-xl-12 col-md-12 row">
          
            <div class="form-group col-xl-5 col-md-5">
                <label>Precio Producto *</label>
                <input class="form-control" name="prec_producto" id="prec_producto" placeholder="Precio" type="number" required="required">
                <p class="help-block">Precio del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Peso Producto *</label>
                <input class="form-control" name="peso_producto" id="peso_producto" placeholder="peso_producto" type="number" required="required">
                <p class="help-block">Peso del producto.</p>
            </div>
        
        </div>
        
        <div class="form-group col-xl-12 col-md-12 row">
          
            
            <div class="form-group col-xl-5 col-md-5">
                <label>Categoria *</label>
                <select class="form-control form-select" aria-label="Default select example" id="cat_producto" name="cat_producto" placeholder="Categoria"  required="required">
                    <?php foreach ($categorias as $key => $val) { ?>
                        <option value="<?php echo $val['id']; ?>"><?php echo $val['nombre']; ?></option>
                    <?php } ?>
                </select>
                <p class="help-block">Categoria del producto.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label>Stock Producto (Cantidad) *</label>
                <input class="form-control" name="stock_producto" id="stock_producto" placeholder="Stock" type="number" required="required">
                <p class="help-block">Stock del producto.</p>
            </div>
        
        </div>
        
        
                
        
        <div class="input-group">  
            <div class="form-group col-md-5">
                <input type='button' class='btn btn-success btnCrearProducto' value='Guardar' onclick='postProducto("crear")'>
            </div>
        </div>
    </div>
</form>

