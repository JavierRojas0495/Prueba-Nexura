
<form rule="formRegistroAsignatura" name="formRegistroAsignatura" id="formRegistroAsignatura" action="postRegistrarAsignatura" method="post" enctype="multipart/form-data">
    
    
        <div class="form-group">

            <div class="form-group">
                    <h1 class="page-header"> Editar Asignatura </h1>
            </div>
            
            <div class="form-group col-md-7 col-lg-8" style="background-color: #BFF3F7">
                <h3> Los campos con asteriscos (*) son obligatorios</h3>
            </div>
             
            <div class="input-group">
                <?php foreach ($datosasignatura as $key => $asignatura) { ?>

                <input type="hidden" name="id" id="id" value="<?php echo $asignatura['id'] ?>">

                <div class="form-group col-xl-5 col-md-5">
                    <label>Nombre *</label>
                    <input class="form-control" name="nombre" id="nombre" placeholder="Asignatura" type="text" value="<?php echo $asignatura['nombre'] ?>" required="required">
                    <p class="help-block">Nombre de la asignatura.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5 form-area">
                    <label>Area *</label><br>
                    <select class="form-control form-select" aria-label="Default select example" id="area" name="area" placeholder="Area" required="required">
                        <?php foreach ($datos as $key => $val) { ?>
                            <option value="<?php echo $val['id']; ?>" <?php if($asignatura['area_id'] == $val['id']){ echo 'selected="selected"'; } ?>><?php echo $val['nombre']; ?></option>
                        <?php } ?>
                    </select>
                    <p class="help-block">Area de la asignatura.</p>
                </div>
                 
             </div>

            
            <div class="form-group col-xl-12 col-md-12 row">

                <div class="form-group col-xl-5 col-md-5">
                    <label>Descripción *</label>
                    <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required"><?php echo $asignatura['descripcion'] ?></textArea>
                    <p class="help-block">Descripcion de la asignatura.</p>
                </div>
                
                <div class="form-group col-xl-5 col-md-5 mx-3">
                    <label>Creditos *</label>
                    <input class="form-control" name="num_creditos" id="num_creditos" placeholder="Creditos" type="number" value="<?php echo $asignatura['creditos'] ?>" required="required">
                    <p class="help-block">Numero de creditos asignatura.</p>
                </div>
            </div>

            <div class="input-group">   

                <div class="form-group col-xl-5 col-md-5">
                    <label> Nivel *</label>
                    <select class="form-control form-select" aria-label="Default select example" id="nivel" name="nivel" placeholder="Nivel" required="required">
                            <option value="Lectiva" <?php if($asignatura['nivel'] == "Lectiva") { echo 'selected="selected"'; } ?> >Lectiva</option>
                            <option value="Obligatoria" <?php  if($asignatura['nivel'] == "Obligatoria") { echo 'selected="selected"'; } ?> >Obligatoria</option>
                    </select>
                    <p class="help-block">Nivel asignatura.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5 mx-2">
                    <label> Estado *</label>
                    <select class="form-control form-select" aria-label="Default select example" id="estado" name="estado" placeholder="Estado" required="required">
                            <option value="A" <?php if($asignatura['estado'] == "A") { echo 'selected="selected"'; } ?> >Activa</option>
                            <option value="I" <?php  if($asignatura['estado'] == "I") { echo 'selected="selected"'; } ?> >Inactiva</option>
                    </select>
                    <p class="help-block">Estado De La Asignatura.</p>
                </div>
                 
             </div>
             <?php } ?>
            <div class="input-group">  
                <div class="form-group col-md-5">
                    <input type='button' class='btn btn-success btnCrearUsuario' value='Guardar' onclick="postAsignatura(2)">
                </div>
            </div>

        </div>
 </form>