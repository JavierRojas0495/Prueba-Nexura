
<form rule="formRegistroAsignatura" name="formRegistroAsignatura" id="formRegistroAsignatura" action="postRegistrarAsignatura" method="post" enctype="multipart/form-data">
    
    
        <div class="form-group">

            <div class="form-group">
                    <h1 class="page-header"> Registrar Asignatura </h1>
            </div>
            
            <div class="form-group col-md-7 col-lg-8" style="background-color: #BFF3F7">
                <h3> Los campos con asteriscos (*) son obligatorios</h3>
            </div>
             
            <div class="input-group">   

                <div class="form-group col-xl-5 col-md-5">
                    <label>Nombre *</label>
                    <input class="form-control" name="nombre" id="nombre" placeholder="Asignatura" type="text" required="required">
                    <p class="help-block">Nombre de la asignatura.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5 form-area">
                    <label>Area *</label><br>
                    <select class="form-control form-select" aria-label="Default select example" id="area" name="area" placeholder="Area" required="required">
                        <?php foreach ($datos as $key => $val) { ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['nombre']; ?></option>
                        <?php } ?>
                    </select>
                    <p class="help-block">Area de la asignatura.</p>
                </div>
                 
             </div>

            
            <div class="form-group col-xl-12 col-md-12 row">

                <div class="form-group col-xl-5 col-md-5">
                    <label>Descripción *</label>
                    <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required"></textArea>
                    <p class="help-block">Descripcion de la asignatura.</p>
                </div>
                
                <div class="form-group col-xl-5 col-md-5 mx-3">
                    <label>Creditos *</label>
                    <input class="form-control" name="num_creditos" id="num_creditos" placeholder="Creditos" type="number" required="required">
                    <p class="help-block">Numero de creditos asignatura.</p>
                </div>
            </div>

            <div class="input-group">   

                <div class="form-group col-xl-5 col-md-5">
                    <label> Nivel *</label>
                    <select class="form-control form-select" aria-label="Default select example" id="nivel" name="nivel" placeholder="Nivel" required="required">
                            <option value="Lectiva">Lectiva</option>
                            <option value="Obligatoria">Obligatoria</option>
                    </select>
                    <p class="help-block">Nivel asignatura.</p>
                </div>
                 
             </div>
            
            <div class="input-group">  
                <div class="form-group col-md-5">
                    <input type='button' class='btn btn-success btnCrearUsuario' value='Guardar' onclick="postAsignatura(1)">
                </div>
            </div>

        </div>
 </form>