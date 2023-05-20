<div class="col-lg-12">
        <h1 class="page-header">Comisiones Generadas</h1>
</div>
    
                        
    <?php if ($tipo == 0) { ?>

    
    <div class="form-group">
        
        <table class="table table-bordered table-striped border-primary"  id="dataTableComisiones" name="dataTableComisiones" >
            <thead>
                <tr>
                    <th><i class="fas fa-cart-plus"></i> Producto </th>
                    <th><i class="fas fa-tag"></i> Referencia </th>
                    <th style='text-align: center';><i class="fas fa-clipboard-list"></i> Precio </th>
                    <th style='text-align: center';><i class="fas fa-chart-pie"></i> Cantidad Vendida </th>
                    <th style='text-align: center';><i class="fas fa-chart-pie"></i> Total Venta </th>
                    <th style='text-align: center';><i class="far fa-money-bill-alt"></i> Comision </th>
                    <th style='text-align: center';><i class="far fa-check-circle"></i> Asesor Comercial </th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($resultados as $key => $value) {
                    echo "<tr>";
                            echo "<td>".'<img loading="lazy" src="'.$value['ruta_img'].'" alt="Elemento de Descarga" width="50px" height="50px">  '.$value['prod_nombre']."</td>";
                            echo "<td>".$value['prod_referencia']."</td>";
                            echo "<td style='text-align: center'; >".number_format($value['prod_prec'])."</td>";
                            echo "<td style='text-align: center';>".$value['cant_prod']."</td>";
                            echo "<td style='text-align: center';>".number_format($value['total_venta'])."</td>";
                            echo "<td style='text-align: center';>".number_format($value['comision'])."</td>";
                            echo "<td style='text-align: center';>".$value['nombre']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 

    <?php } else { ?>
    <div class="form-group">
        
        <table class="table table-bordered table-striped border-primary"  id="dataTableComisiones" name="dataTableComisiones" >
            <thead>
                <tr>
                    <th><i class="fas fa-cart-plus"></i> Total Venta  </th>
                    <th><i class="fas fa-tag"></i> Total Comision </th>
                    <th style='text-align: center';><i class="fas fa-clipboard-list"></i> Asesor Comercial</th>
                    
                    
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($resultados as $key => $value) {
                    echo "<tr>";
                        echo "<td>".number_format($value['totalventa'])."</td>";
                        echo "<td style='text-align: center';>".number_format($value['comision'])."</td>";
                        echo "<td style='text-align: center';>".$value['nombre']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 

    <?php } ?>