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
            $sumador_total = 0;
            $sumador_importe = 0;
            $sumador_iva = 0;
            $iva = 0;
            $importe = 0;
            
            foreach ($temp as $key) {
                $id_temp = $key['id'];
                $id = $key['idProd'];
                $cantidad = $key['cantidad'];
                $precio = $key['precio'];

                $importe = $cantidad * $precio;
                $iva = 0.16 * $importe;
                $total = $importe + $iva;
                $sumador_total += $total;
                $sumador_importe += $importe;
                $sumador_iva += $iva;
                ?>
                <td> <?php echo $id ?></td>
                <td> <?php echo $cantidad ?></td>
                <td> <?php echo $precio ?></td>
                <td> <?php echo $importe ?></td>
                <td> <a href="#" class="fa fa-trash" onclick="eliminar(<?php echo $id_temp ?>)"></a></td>

            </tbody>
        </table>
    <?php } ?>
    <!-- ROW PARTE 4 -->
    <div class="row">
        <div class="col-xs-6 col-md-4">
            IVA: <input type="text" class="form-control" value=" <?php echo $sumador_iva ?>" readonly autofocus />
        </div>
        <div class="col-xs-6 col-md-4">
            Subtotal: <input type="text" class="form-control" name="cotID" value=" <?php echo $sumador_importe ?>" autofocus readonly />
        </div>
        <div class="col-xs-6 col-md-4">
            Total: <input type="text" class="form-control" name="uID" value=" <?php echo $sumador_total ?>" autofocus readonly />
        </div>
    </div>
</div>