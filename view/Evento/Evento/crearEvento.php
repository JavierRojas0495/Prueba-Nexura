<h2> Crear Proceso / Evento participación cerrada</h2>

<hr>

<form rule="formRegistrarEvento" name="formRegistrarEvento" id="formRegistrarEvento" action="postRegistrarEvento" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">

        <div class="form-group">
                <h3 class="page-header"> Informacion básica  </h3>
        </div>
        
        <div class="form-group col-md-7 col-lg-8" style="background-color: #BFF3F7">
            <h4> Los campos con asteriscos (*) son obligatorios</h4>
        </div>
            
        <div class="input-group">   

            <div class="form-group col-xl-5 col-md-5">
                <label> Objeto * </label>
                <input class="form-control" name="objeto" id="objeto" placeholder="Objeto" type="text" required="required">
                <p class="help-block">Identificacion del proceso</p>
            </div>

            <div class="form-group col-xl-5 col-md-5 form-area">
                <label>Actividad *</label><br>
                <select class="form-control form-select" aria-label="Default select example" id="actividad" name="actividad" placeholder="Actividad" required="required">
                 <?php foreach ($productos as $key => $val) { ?>
                        <option value="<?php echo $val['id_prod']; ?>"><?php echo $val['prod_nombre']; ?></option>
                <?php } ?>
                </select>
                <p class="help-block">Tipo Actividad.</p>
            </div>
                
        </div>

        
        <div class="form-group col-xl-12 col-md-12 row">

            <div class="form-group col-xl-5 col-md-5">
                <label>Descripción / Alcance *</label>
                <textArea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required="required"></textArea>
                <p class="help-block">Descripcion o alcance detallado.</p>
            </div>
            
        </div>

        <div class="input-group col-xl-6 col-md-6 row">   

            <div class="form-group col-xl-5 col-md-5">
                <label> Moneda *</label>
                <select class="form-control form-select" aria-label="Default select example" id="moneda" name="moneda" placeholder="Moneda" required="required">
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="COP">COP</option>
                </select>
                <p class="help-block">Tipo Moneda.</p>
            </div>

            <div class="form-group col-xl-5 col-md-5">
                <label> Presupuesto * </label>
                <input class="form-control" name="presupuesto" id="presupuesto" placeholder="Presupuesto" type="number" required="required">
                <p class="help-block">Presupuesto Asignado.</p>
            </div>
                
            </div>
    
            <hr>

        <div class="form-group">
                <h3 class="page-header"> Cronograma  </h3>
        </div>

        <div class="input-group col-xl-12 col-md-12 row">   

            <div class="form-group col-xl-3 col-md-3">
                <label> Fecha * </label>
                <input class="form-control" name="fechaIni" id="fechaIni" placeholder="Fecha Inicial" type="date" required="required">
                <p class="help-block">Fecha Inicio</p>
            </div>

            <div class="form-group col-xl-3 col-md-3">
                <label>Hora *</label><br>
                <input class="form-control" name="horaIni" id="horaIni" placeholder="Hora Inicial" type="time" required="required">
                <p class="help-block">Hora Inicio</p>
            </div>

            <div class="form-group col-xl-3 col-md-3">
                <label>Fecha *</label><br>
                <input class="form-control" name="fechaFin" id="fechaFin" placeholder="Fecha Final" type="date" required="required">
                <p class="help-block"> Fecha Fin </p>
            </div>

            <div class="form-group col-xl-3 col-md-3">
                <label>Hora *</label><br>
                <input class="form-control" name="horaFin" id="horaFin" placeholder="Hora Final" type="time" required="required">
                <p class="help-block">Hora Fin</p>
            </div>
                
        </div>


            <hr>
        
        <div class="input-group col-md-12">  
            <div class="form-group">
                <input type='button' class='btn btn-success btnCrearUsuario' value='Guardar' onclick="postEvento()">
            </div>
        </div>

    </div>
 </form>

 <script src="../web/js/evento/evento.js"> </script>