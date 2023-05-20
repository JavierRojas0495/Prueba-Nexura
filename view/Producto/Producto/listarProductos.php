
    <br>
    <div class="col-lg-12">
        <h1 class="page-header">Listar Productos</h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table id="dataTableProductos" class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th><i class="fas fa-cart-plus"></i> Producto </th>
                        <th><i class="fas fa-tag"></i> Referencia </th>
                        <th><i class="far fa-money-bill-alt"></i> Precio</th>
                        <th><i class="fas fa-briefcase"></i> Categoria </th>
                        <th><i class="fas fa-chart-pie"></i> Stock </th>
                        <th><i class="far fa-calendar-alt"></i> Fecha Producto </th>
                        <th><i class="fas fa-cogs"></i> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datos as $key => $value) {
                        echo "<tr>";
                        echo "<td>".$value['prod_nombre']."</td>";
                        echo "<td>".$value['prod_referencia']."</td>";
                        echo "<td>".$value['prod_precio']."</td>";
                        echo "<td>".$value['categoria']."</td>";
                        echo "<td>".$value['prod_stock']."</td>";
                        echo "<td>".$value['prod_fecha_creacion']."</td>";
                        echo "<td>" ;
                        echo "<input type='button' class='btn btn-primary' value='Editar' onclick='editarProducto(".$value['id_prod'].");'>";
                        echo "<input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarProducto(".$value['id_prod'].");'>";
                        echo "<input type='button' class='btn btn-success' value='Venta' onclick='ventaProducto(".$value['id_prod'].");'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    