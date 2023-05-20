<!-- Modal -->
<div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <div class="card-body">
          <div class="card-product">
            <input type="hidden" class="form-control" id="productId">
          </div>
          <h3 class="card-title text-center" id="product-name"></h3>
          <div class="form-group">
            <div class="row d-block ">
              <img id="imagenPrevisualizacion" class="rounded mx-auto d-block" style=" width: 250px; height: 250px "></img>
                  <p class="card-text" style="margin-left: 13px;" id="product-ref"></p>    
                  <div class="col-6"> 
                      <label><strong> Precio:</strong></label>
                      <h5 id="prec-prod"></h5>
                  </div>
                  <div class="card-text">  
                    <label style="margin-left: 13px;"> <strong>Unidades Disponibles: </strong> <h5 id="UnidadesD"> </h5> </label>
                  </div>

                  <div class="row"> 
                        <div>
                          <label style="margin-left: 25px;"><strong> Unidades: </strong></label>
                        </div>
                        <div class="form" style="margin-left: 19px;">
                          <a type="button" id="del" class="btn btn-danger">-</a>
                            <input type="text" id="cantProd" class="text-center add-cant" style="width: 60px;"readonly>
                          <a type="button" id="add" class="btn btn-success">+</a>
                        </div>
                  </div>
                  </div>                  
            </div>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary add-product">Agregar Producto</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>