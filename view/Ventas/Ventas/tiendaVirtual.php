<?php include('../view/Ventas/ModalTienda/agregarProductoModal.php'); ?>
<br>
<div class="text-center">
    <h2> <strong>Tienda Virtual</strong></h2>
</div>
<br>
<div class="form-group">

    <div class="card-columns" >
    <?php foreach ($datos as $key => $value) { ?>
        
        <div class="card">
            <br>
            <div class="text-center">
                <img class="rounded card-img-top" style=" width: 300px; height: 300px " src="<?php echo $value['ruta_img']; ?>" alt="Card image cap">
            </div>
            <div class="card-body">
                
                <h3 class="card-title text-center"> <strong> <?php echo $value['prod_nombre']; ?> </strong></h3>
                <h4> <strong>Precio: </strong><?php echo number_format($value['prod_prec']); ?></h4>
                <p class="card-text"><strong>Referencia:</strong> <?php echo $value['prod_ref']; ?></p>
                <div class="form-group text-center">
                    <button type='button' class='btn btn-success' onClick='modalShop(<?php echo $value['id_prod']; ?>)'> <i class='fas fa-cart-plus'></i> Agregar </button>
                    <button type='button' class='btn btn-info' onclick=''> <i class='fas fa-clipboard-list'></i> Ver Detalles </button>
                </div>
            </div>
            <div class="card-footer">
                <small class="text-muted"> <strong> Unidades Disponibles <?php echo $value['vnt_cant_prod']; ?> </strong> </small>
            </div>
        </div>    
        

    <?php } ?>        

    </div>
</div>

<link href="css/carritoCompras.css" rel="stylesheet">

