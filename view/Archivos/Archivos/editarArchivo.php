
<form rule="formEditarArchivo" name="formEditarArchivo" id="formEditarArchivo" action="postEditarArchivo" method="post" enctype="multipart/form-data">
    
    
        <div class="form-group">

            <div class="form-group">
                    <h1 class="page-header"> Editar Archivo </h1>
            </div>
            
            <div class="form-group col-md-7 col-lg-8" style="background-color: #BFF3F7">
                <h3> Los campos con asteriscos (*) son obligatorios</h3>
            </div>
            <?php foreach ($archivo as $arc) { ?>
                <input type="hidden" name="id" id="id" value="<?php echo $arc['id']; ?> ">
                
            <div class="form-group col-xl-5 col-md-5">
                <label>Archivo PDF (*) </label>
                <input type="file" name="pdf" id="pdf" class="form-control-file" accept="application/pdf" onchange="inputFile(this)">
                <p class="help-block">Seleccionar Archivo PDF.</p>
            </div>

                
            <div class="input-group">   

                <div class="form-group col-xl-5 col-md-5">
                    <label>Nombre *</label>
                    <input class="form-control" name="nombre" id="nombre" placeholder="Archivo" value ="<?php echo $arc['nombre'] ?>" type="text" required="required">
                    <p class="help-block">Nombre del archivo pdf.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5">
                    <label>Descripción *</label>
                    <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required" value="coco"><?php echo $arc['descripcion'] ?></textArea>
                    <p class="help-block">Descripcion del archivo pdf.</p>
                </div>
                 
             </div>
             <?php } ?>

             <div class="input-group">  
                <div class="form-group col-md-5">
                    <input type='button' class='btn btn-success btnEditarArchivo' value='Editar' onclick="postEditarArchivo()">
                </div>
            </div>

        </div>
 </form>

 

 <script src="../web/js/archivosJs/archivos.js"> </script>