<br>
    <div class="col-lg-12">
        <h1 class="page-header"> Listado De Eventos Información </h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableEventosList" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th><i class="fa fa-book"></i> ID Oferta </th>
                        <th><i class="fa fa-book"></i> Creador Oferta </th>
                        <th><i class="fa fa-book"></i> Objeto </th>
                        <th><i class="fa fa-book"></i> Actividad </th>
                        <th><i class="fa fa-book"></i> Descripción </th>
                        <th><i class="fa fa-credit-card"></i> Moneda </th>
                        <th><i class="fa fa-bar-chart"></i> Presupuesto </th>
                        <th><i class="fa fa-bar-chart"></i> Fecha Inicio </th>
                        <th><i class="fa fa-bar-chart"></i> Hora Inicio </th>
                        <th><i class="fa fa-bar-chart"></i> Fecha Fin </th>
                        <th><i class="fa fa-bar-chart"></i> Hora Fin </th>
                        <th><i class="fas fa-briefcase"></i> Estado </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($evento as $key => $value) {
                        echo "<tr>";
                        echo "<td>".$value['id_evento']."</td>";
                        echo "<td>".$value['nombre']."</td>";
                        echo "<td>".$value['objetivo_evento']."</td>";
                        echo "<td>".$value['prod_nombre']."</td>";
                        echo "<td>".$value['descripcion_evento']."</td>";
                        echo "<td>".$value['moneda_evento']."</td>";
                        echo "<td>".$value['presupuesto_evento']."</td>";
                        echo "<td>".$value['fechainicio_evento']."</td>";
                        echo "<td>".$value['horainicio_evento']."</td>";
                        echo "<td>".$value['fechafin_evento']."</td>";
                        echo "<td>".$value['horafin_evento']."</td>";
                        echo "<td>".$value['estado_evento']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
                
