<br>
<div class="d-flex">
<div class="form-group col-xl-2 col-md-2">
    <label for="exampleInput"> <strong> Producto con mas stock </strong></label>
    <input type="text" class="form-control" value="<?php echo $prodMasStock[0]["prod_nombre"] ?>" readonly="true">
</div>

<div class="form-group col-xl-2 col-md-2">
    <label for="exampleInput"> <strong> Producto menos stock </strong></label>
    <input type="text" class="form-control" value="<?php echo $prodMasVnt[0]["prod_nombre"] ?>" readonly="true">
</div>
</div>


    
    <div class="col-lg-12">
        <h1 class="page-header">Listar Ventas Productos</h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table class="table table-bordered table-striped border-primary"  id="dataTableProductos" name="dataTableProductos" >
                <thead>
                    <tr>
                        <th><i class="fas fa-cart-plus"></i> Producto </th>
                        <th><i class="fas fa-tag"></i> Referencia </th>
                        <th style='text-align: center';><i class="fas fa-clipboard-list"></i> Categoria </th>
                        <th style='text-align: center';><i class="fas fa-chart-pie"></i> Unidades Disponibles </th>
                        <th style='text-align: center';><i class="far fa-money-bill-alt"></i> Precio</th>
                        <th style='text-align: center';><i class="far fa-check-circle"></i> Estado </th>
                        <th style='text-align: center';><i class="far fa-calendar-check"></i> Opciones </th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datos as $key => $value) {
                        echo "<tr>";
                        echo "<td>".'<img loading="lazy" src="'.$value['ruta_img'].'" alt="Elemento de Descarga" width="50px" height="50px">  '.$value['prod_nombre']."</td>";
                        echo "<td>".$value['prod_ref']."</td>";
                        echo "<td style='text-align: center';>".$value['categoria']."</td>";
                        echo "<td style='text-align: center';>".$value['vnt_cant_prod']."</td>";
                        echo "<td style='text-align: center'; >".number_format($value['prod_prec'])."</td>";
                        echo "<td style='text-align: center'; >";
                                if($value['estado'] == 'A') { echo "ACTIVO";}else { echo "INACTIVO";}
                        "</td>";
                        echo "<td style='text-align: center';>";
                        echo " <a type='button' class='btn btn-info' onclick='eliminarUsuarios(".$value['id_prod'].");'> Cambiar Estado </a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    