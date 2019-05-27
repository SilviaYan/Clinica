<div class="row m-1 pt-2  col-12 justify-content-center">

    <div class="row m-1 pt-2  col-12 justify-content-center">
        <!--<H5 style="color:green">PRODUCTOS</H5>-->
        <table class="table table-hover table-striped col-12" id="" style="width:60%">
            <thead class="" style="background-color:#2C84A7">
                <tr>
                    <th width="10%" style="color:#FFF">#</th>
                    <th width="10%" style="color:#FFF">Nombre</th>
                    <th width="10%" style="color:#FFF">Precio</th>
                    <th width="6%"  style="color:#FFF"><i class="fas fa-plus-circle"> </i> Cantidad</th>
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
                        <td> <input type="text" class="form-control" value="0"> </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</div>