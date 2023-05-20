
<form rule="formCrearUsuario" name="formCrearUsuario" id="formCrearUsuario" action="postCrearUsuario" method="post" enctype="multipart/form-data">
    
    
        <div class="form-group">

            <div class="form-group">
                    <h1 class="page-header"> Registrar Empleado </h1>
            </div>
            
            <div class="form-group col-md-8 col-lg-10" style="background-color: #BFF3F7">
                <h3> Los campos con asteriscos (*) son obligatorios</h3>
            </div>
            
            
            <div class="input-group">   
                
            <div class="form-group col-xl-5 col-md-5">
                <label>Imagen Del Usuario </label>
                <div>
                    <img id="imagenPrevisualizacion" style=" width: 150px; height: auto "></img>
                </div>
                <input type="file" name="image" id="image" class="form-control-file" accept="image/png,image/jpeg">
                <p class="help-block">Cambiar imagen de usuario.</p>
            </div>

            </div>

            <div class="input-group">

                <div class="form-group col-xl-5 col-md-5">
                    <label>Nombre Completo *</label>
                    <input class="form-control" name="nombre" id="nombre" placeholder="Nombre" type="text" required="required">
                    <p class="help-block">Nombre del usuario.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5">
                    <label>Correo Electrónico *</label>
                    <input class="form-control" name="email" id="email" type="email" placeholder="Correo" required="required">
                    <p class="help-block">Correo del usuario.</p>
                </div>
                 
             </div>

            
            <div class="form-group col-xl-12 col-md-12 row">

                <div class="form-group col-xl-5 col-md-5">
            
                        <label>Sexo *</label>
                        
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" id="sexo" value="M">
                                    Masculino
                                </label>
                            </div>
                        
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sexo" id="sexo" value="F">
                                    Femenino
                                </label>
                            </div>
                        <p class="help-block">Sexo del usuario.</p>
                </div>
            

                <div class="form-group col-xl-5 col-md-5 mx-2">
                    <label>Area *</label><br>
                    <select class="form-control" aria-label="Default select example" id="area" name="area" placeholder="Area" required="required">
                        <?php foreach ($datos as $key => $val) { ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['nombre']; ?></option>
                        <?php } ?>
                    </select>
                    <p class="help-block">Area del usuario.</p>
                </div>

            </div>

            <div class="input-group">   
                
                <div class="form-group col-xl-5 col-md-5">
                    <label>Descripción *</label>
                    <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required" value=""> </textArea>
                    <p class="help-block">Descripcion del usuario.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5">
                    <label>Numero Documento *</label>
                    <input class="form-control" name="num_doc" id="num_doc" placeholder="Documento" type="number" required="required">
                    <p class="help-block">Numero del documento de identidad usuario.</p>
                </div>

            </div>
            
            <div class="input-group">   
                
                <div class="form-group col-xl-5 col-md-5">
                    <label>Numero Telefonico *</label>
                    <input class="form-control" name="num_tel" id="num_tel" placeholder="Telefono" type="number" required="required">
                    <p class="help-block">Numero de telefono del usuario.</p>
                </div>

                <div class="form-group col-xl-5 col-md-5">
                    <label>Dirección *</label>
                    <input class="form-control" name="usu_dir" id="usu_dir" placeholder="Dirección" type="text" required="required">
                    <p class="help-block">Direccion residencia usuario.</p>
                </div>
            </div>

            <div class="input-group"> 
                <div class="form-group col-xl-6 col-md-6">
                    <input name="boletin" id="boletin" type="checkbox" value="1"> Recibir boletín Informativo
                </div>
                <br>
            </div>

            <div class="input-group">   
           
                <div class="form-group col-xl-5 col-md-5">
                    <label> Rol *</label><br>
                    <?php foreach ($roles as $key => $val) { ?>
                        <input class="only-one" name="rol" id="rol" type="checkbox" value="<?php echo $val['id']; ?>"> <?php echo $val['nombre']; ?><br>
                    <?php } ?>
                    <p class="help-block">Rol del usuario.</p>
                </div>
                
                <div class="form-group col-xl-5 col-md-5">
                    <label>Ciudad *</label><br>
                    <select class="form-control form-select" aria-label="Default select example" id="ciudad" name="ciudad" placeholder="Ciudad" required="required">
                        <?php foreach ($ciudad as $key => $val) { ?>
                            <option value="<?php echo $val['id']; ?>"> <?php echo $val['nombre']; ?></option>
                        <?php } ?>
                    </select>
                    <p class="help-block">Ciudad de residencia del usuario.</p>
                </div>
                
            </div>

            <div class="input-group">  
                <div class="form-group col-md-5">
                    <input type='button' class='btn btn-success btnCrearUsuario' value='Guardar' onclick="postUsuario(1)">
                </div>
            </div>

        </div>
 </form>