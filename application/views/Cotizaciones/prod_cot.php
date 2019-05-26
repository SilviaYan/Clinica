<div class="row m-1 pt-2  col-12 justify-content-center">

    <div class="row m-1 pt-2  col-12 justify-content-center">
        <!--<H5 style="color:green">PRODUCTOS</H5>-->
        <table class="table table-hover table-striped col-12" id="" style="width:60%">
            <thead class="" style="background-color:#A1ABA1">
                <tr>
                    <th width="10%">Id Producto</th>
                    <th width="10%">Nombre</th>
                    <th width="10%">Precio</th>
                    <th width="6%"><i class="fas fa-plus-circle"> </i> Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <br>
                <?php
                foreach ($prod as $key) {
                    ?>
                    <tr>
                        <th scope="row" style="color: #000000;"><?= $key['prodID'] ?></th>
                        <td style="color: #000000;"><?= $key['pProd'] ?></td>
                        <td style="color: #000000;"><?= $key['pCosto'] ?></td>
                        <td> <input type="text" class="form-control" placeholder="0"> </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</div>