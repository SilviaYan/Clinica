 <!-- Titulo -->

 
        <div class="row m-1 pt-2  col-12 justify-content-center">

        <div class="row m-1 pt-2  col-12 justify-content-center">
          <!--<H5 style="color:green">PRODUCTOS</H5>-->
            <table class="table table-hover table-striped col-12" id="tablaUsuario" style="width:60%">
                <thead class="" style="background-color:#A1ABA1">
                    <tr>
                      <th width="10%">Id Producto</th>
                      <th width="10%">Nombre</th>
                      <th width="10%">Descripcion</th>
                      <th width="10%">Unidad de Medida</th>
                      <th width="10%">Existencia</th>
                      <th width="10%">Categoria o tipo</th>
                      <th width="10%">Precio</th>
                      <th width="10%">Costo</th>
                      <th width="10%">Marca</th>
                      <th width="10%">Proveedor</th>

                      <th width="6%"><i class="fas fa-pencil-alt"></i></th>
                      <th width="6%"><i class="fas fa-trash-alt"></i></th>  
                    </tr> 
                </thead>
                <tbody>    
                    <br> 
                    <?php
                      foreach ($products as $key) {
                    ?>  
                      <tr>
                      <th scope="row" style="color: #000000;"><?= $key['prodID']?></th>
                      <td style="color: #000000;"><?= $key['pProd']?></td>
                      <td style="color: #000000;"><?= $key['pDesc']?></td>
                      <td style="color: #000000;"><?= $key['pUnidad']?></td>
                      <td style="color: #000000;"><?php if($key['pExiste'] <= 3){
                        echo "URGENTE";
                      } else {
                        echo $key['pExiste'];
                      }?></td>
                      <td style="color: #000000;"><?= $key['pTipo']?></td>
                      <td style="color: #000000;"><?= $key['pPrecio']?></td>
                      <td style="color: #000000;"><?= $key['pCosto']?></td>
                      <td style="color: #000000;"><?= $key['pMarca']?></td>
                      <td style="color: #000000;"><?= $key['pProv']?></td>

                      <td><form action = '<?= base_url('')?>Productos/agregar' method = 'post'><button type="submit" class="btn btn-info btn-circle gira" value="<?=$key['prodID']?>" id="editar" name="editar"><i class="fas fa-pencil-alt"></i></button></form></td>
                     <!--Eliminar-->
                      <td>  <button type="button" class="btn btn-danger btn-circle gira" data-toggle="modal" data-target="#confirmacionEliminar<?=$key['prodID']?>"><i class="fas fa-trash-alt"></i></button>

                      <div class="modal fade" id="confirmacionEliminar<?=$key['prodID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content"> 
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">¿Eliminar a <?=$key['prodID']?>? </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             <h5> El producto <strong><?=$key['prodID']?></strong> será eliminado. 
                              ¿Estas seguro de continuar con esta acción?</h5>   


                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action = '<?= base_url('')?>Productos/eliminar' method = 'post'><button type="submit" class="btn btn-danger" value="<?=$key['prodID']?>" id="eliminar" name="eliminar" data-target="#exampleModalCenter">Eliminar</button></form>
                            </div>
                          </div>
                        </div>
                      </div>

                      </td>
                    </tr>

                    <?php
                      }
                    ?> 
                  </tbody>
                </table>
                <a href="<?= base_url('')?>Productos/nuevoProducto" class="btn btn-info">AGREGAR</a>
        </div>
      </div>
