
<form rule="formRegistrarArchivo" name="formRegistrarArchivo" id="formRegistrarArchivo" action="postRegistrarArchivo" method="GET" enctype="multipart/form-data">
    
    
        <div class="form-group">

        <input type="hidden" name="ident" id="ident" value="<?php echo $evento ?>" />
            <div class="form-group">
                    <h1 class="page-header"> Adicionar Archivos </h1>
            </div>
            
            <div class="form-group col-md-7 col-lg-8" style="background-color: #BFF3F7">
                <h3> Los campos con asteriscos (*) son obligatorios</h3>
            </div>
             
            <div class="form-group col-xl-5 col-md-5">
                <label>Archivo PDF (*) </label>
                <input type="file" name="archivos" id="archivos" class="form-control-file" multiple>
                <p class="help-block">Seleccionar Archivo PDF.</p>
            </div>


            <div class="input-group">   

                <div class="form-group col-xl-5 col-md-5">
                    <label>Nombre *</label>
                    <input class="form-control" name="nombre" id="nombre" placeholder="Archivo" type="text" required="required">
                    <p class="help-block">Nombre del archivo pdf.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5">
                    <label>Descripción *</label>
                    <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required"></textArea>
                    <p class="help-block">Descripcion del archivo pdf.</p>
                </div>
                 
             </div>

             <div class="input-group">  
                <div class="form-group col-md-5">
                    <input type='button' class='btn btn-success btnCrearArchivo' value='Subir' onclick="postRegistrarArchivos()">
                </div>
            </div>

        </div>
 </form>

 

 <script src="../web/js/evento/evento.js"> </script>