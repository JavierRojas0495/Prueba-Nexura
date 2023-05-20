<h2> Generar Comisiones </h2>

<div class="form-group col-xl-12 col-md-12 row">
          
            <div class="form-group col-xl-4 col-md-4">
                <label> Asesor Comercial </label>
                <select class="form-control form-select" aria-label="Default select example" id="id_usu" name="id_usu" placeholder="Asesor De Ventas" required="required" >
                    <option value="0"> Todos </option>
                    <?php foreach ($asesores as $key => $val) { ?>
                        <option value="<?php echo $val['id']; ?>"> <?php echo $val['nombre']; ?></option>
                    <?php } ?>
                </select>
                <p class="help-block">Asesores Comerciales.</p>
            </div>

            <div class="form-group col-xl-4 col-md-4">
                <label>Comision</label>
                <input class="form-control" name="comision" id="comision" placeholder="Comision" type="number" required="required" value="" >
                <p class="help-block">Comision.</p>
            </div>

            <div class="form-group col-xl-4 col-md-4">
                <label> Tipo </label>
                <select class="form-control form-select" aria-label="Default select example" id="tipo" name="tipo" placeholder="Tipo" required="required" >
                    <option value="0"> Venta </option>
                    <option value="1"> Total Ventas </option>
                </select>
                <p class="help-block">Por Venta / Total Ventas.</p>
            </div>
            
            <div class="form-group col-xl-4 col-md-3">
                <button type='button' class='btn btn-success' onclick='geneararComisiones()'> <i class='fas fa-clipboard-list'> </i> Generar Comision </button>
            </div>
</div>