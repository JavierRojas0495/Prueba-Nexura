<br>
<div class="form-group">
    <a class='btn btn-success' href="<?php echo getUrl("Usuario", "Usuario", "crearUsuario"); ?>" >Registrar Empleado</a></button>
</div>
    
    <div class="col-lg-12">
        <h1 class="page-header">Listar Empleados</h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableUsuarios" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th><i class="fas fa-user"></i> Nombre </th>
                        <th><i class="fas fa-server"></i> Numero Documento </th>
                        <th><i class="fad fa-at"></i> Correo </th>
                        <th><i class="fas fa-id-card"></i> Rol </th>
                        <th><i class="fas fa-briefcase"></i> Area</th>
                        <th><i class="fas fa-globe"></i> Ciudad </th>
                        <th><i class="fas fa-cogs"></i> Opciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datos as $key => $value) {
                        echo "<tr>";
                        echo "<td>".$value['name']."</td>";
                        echo "<td>".$value['documento']."</td>";
                        echo "<td>".$value['correo']."</td>";
                        echo "<td>".$value['rol']."</td>";
                        echo "<td>".$value['area']."</td>";
                        echo "<td>".$value['ciudad']."</td>";
                        echo "<td> <input type='button' class='btn btn-primary' value='Editar' onclick='editarUsuario(".$value['id'].");'>";
                        echo " <input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarUsuarios(".$value['id'].");'></td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
                
    