<br>
<div class="form-group">
    <a class='btn btn-success' href="<?php echo getUrl("Evento", "Evento", "crearEvento"); ?>" > Registrar Evento </a></button>
</div>
    
    <div class="col-lg-12">
        <h1 class="page-header">Listado De Eventos </h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableEventos" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th><i class="fa fa-book"></i> Objeto </th>
                        <th><i class="fa fa-credit-card"></i> Moneda </th>
                        <th><i class="fa fa-bar-chart"></i> Presupuestp </th>
                        <th><i class="fas fa-briefcase"></i> Estado </th>
                        <th><i class="fas fa-cogs"></i> Opciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($evento as $key => $value) {
                        echo "<tr>";
                        echo "<td>".$value['objetivo_evento']."</td>";
                        echo "<td>".$value['moneda_evento']."</td>";
                        echo "<td>".$value['presupuesto_evento']."</td>";
                        echo "<td>".$value['estado_evento']."</td>";
                        echo "<td>";
                        echo " <input type='button' class='btn btn-primary' value='Agregar Contenido' onclick='agregarArchivos(".$value['id_evento'].");'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
                
