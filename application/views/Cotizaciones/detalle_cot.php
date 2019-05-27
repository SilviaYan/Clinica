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
                $iva = 0.16 * $importe;
                $total = $importe + $iva;
                ?>
                <td> <?php echo $key['idProd'] ?></td>
                <td> <?php echo $cantidad ?></td>
                <td> <?php echo $precio ?></td>
                <td> <?php echo $importe ?></td>
                <td> <a href="#" class="fa fa-trash" onclick="eliminar(<?php echo $id_temp ?>)"></a></td>

            </tbody>
        </table>

        <!-- ROW PARTE 4 -->
        <div class="row">
            <div class="col-xs-6 col-md-4">
                IVA: <input type="text" class="form-control" value=" <?php echo $iva ?>" readonly autofocus />
            </div>
            <div class="col-xs-6 col-md-4">
                Subtotal: <input type="text" class="form-control" name="cotID" value=" <?php echo $importe ?>" autofocus readonly />
            </div>
            <div class="col-xs-6 col-md-4">
                Total: <input type="text" class="form-control" name="uID" value=" <?php echo $total ?>" autofocus readonly />
            </div>
        </div>
    <?php } ?>
</div>