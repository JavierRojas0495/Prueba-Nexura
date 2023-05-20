<br>
<div class="form-group">
    <a class='btn btn-success' href="<?php echo getUrl("Asignatura", "Asignatura", "registrarAsignatura"); ?>" >Registrar Asignatura </a></button>
</div>
    
    <div class="col-lg-12">
        <h1 class="page-header">Listar Asignaturas </h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableAsignatura" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th><i class="fa fa-book"></i> Nombre </th>
                        <th><i class="	fa fa-briefcase"></i> Area </th>
                        <th><i class="fa fa-bar-chart"></i> Nivel </th>
                        <!-- <th><i class="fas fa-briefcase"></i> Estado </th> -->
                        <th><i class="fas fa-cogs"></i> Opciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datos as $key => $value) {
                        echo "<tr>";
                        echo "<td>".$value['nombre']."</td>";
                        echo "<td>".$value['area']."</td>";
                        echo "<td>".$value['nivel']."</td>";
                        //echo "<td>".$value['nivel']."</td>";
                        echo "<td> <input type='button' class='btn btn-primary' value='Editar' onclick='editarAsignatura(".$value['id'].");'>";
                        echo " <input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarAsignatura(".$value['id'].");'></td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
                
    