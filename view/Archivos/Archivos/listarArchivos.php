<br>
<div class="form-group">
    <a class='btn btn-success' href="<?php echo getUrl("Archivos", "Archivos", "subirNuevoArchivo"); ?>" >Registrar Nuevo Archivo </a></button>
</div>
    
    <div class="col-lg-12">
        <h1 class="page-header">Listar Archivos </h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableAsignatura" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th style='text-align: left';><i class="fa fa-book"></i> Nombre </th>
                        <th style='text-align: left';><i class="fa fa-bar-chart"></i> Ruta </th>
                        
                        <th style='text-align: center';><i class="fas fa-cogs"></i> Opciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($archivos as $key => $value) {
                        echo "<tr>";
                        echo "<td style='text-align: left'; >".$value['nombre']."</td>";
                        echo "<td style='text-align: left'; >".$value['ruta']."</td>";
                        echo "<td style='text-align: center';>";
                        echo " <input type='button' class='btn btn-primary' value='Editar' onclick='editarArchivo(".$value['id'].");'>";
                        echo " <input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarArchivo(".$value['id'].");'>";
                        echo " <input type='button' class='btn btn-success' value='Ver Documento' onclick='verDocumentoPDF(".$value['id'].");'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <script src="../web/js/archivosJs/archivos.js"> </script>  
    