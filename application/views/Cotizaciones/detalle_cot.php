 <div class="table-responsive">
     <table class="table-hover table table-striped table-bordered">
         <thead class="thead-dark">
             <tr>
                 <th scope="col"> # Producto</th>
                 <th scope="col"> Cantidad</th>
                 <th scope="col"> Precio Unit.</th>
                 <th scope="col"> Importe</th>
                 <th scope="col"> </th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($temp as $key) {
                    $id_temp = $key['id'];
                    $importe = 0;
                    $cantidad = $key['cantidad'];
                    $precio = $key['precio'];
                    $importe = $cantidad * $precio;
                    ?>
                 <td> <?php echo $key['idProd'] ?></td>
                 <td> <?php echo $cantidad ?></td>
                 <td> <?php echo $precio ?></td>
                 <td> <?php echo $importe ?></td>
                 <td> <a href="#" class="fla fla-trash"  onclick="eliminar(<?php echo $id_temp ?>)"></a></td>
             <?php } ?>
         </tbody>
     </table>
 </div>