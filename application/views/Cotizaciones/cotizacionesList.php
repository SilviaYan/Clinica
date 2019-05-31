 <!-- Titulo -->


 <div class="row m-1 pt-2  col-12 justify-content-center">

     <div class="row m-1 pt-2  col-12 justify-content-center">
         <table class="table table-hover table-striped col-12" id="tablaCotizacion" style="width:60%">
             <thead class="" style="background-color:#A1ABA1">
                 <tr>
                     <th width="10%">ID Cotización</th>
                     <th width="10%">ID Paciente</th>
                     <th width="10%">Fecha</th>
                     <th width="10%">Pago</th>
                     <th width="6%"><i class="fas fa-trash-alt"></i></th>
                 </tr>
             </thead>
             <tbody>
                 <br>
                 <?php
                    foreach ($cot as $key) {
                        ?>
                     <tr>
                         <td style="color: #000000;"><?= $key['cotID'] ?></td>
                         <td style="color: #000000;"><?= $key['pID'] ?></td>
                         <td style="color: #000000;"><?= $key['cFecha'] ?></td>
                         <td style="color: #000000;"><?= $key['cPago'] ?></td>
                         </td>
                         <!--Eliminar-->
                         <td> <button type="button" class="btn btn-danger btn-circle gira" data-toggle="modal" data-target="#confirmacionEliminar<?= $key['cotID'] ?>"><i class="fas fa-trash-alt"></i></button>

                             <div class="modal fade" id="confirmacionEliminar<?= $key['cotID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalCenterTitle">¿Eliminar a <?= $key['cotID'] ?>? </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <h5> La cotización <strong><?= $key['cotID'] ?></strong> será eliminada.
                                                 ¿Estas seguro de continuar con esta acción?</h5>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                             <form action='<?= base_url('') ?>Cotizaciones/eliminar' method='post'><button type="submit" class="btn btn-danger" value="<?= $key['cotID'] ?>" id="eliminar" name="eliminar" data-target="#exampleModalCenter">Eliminar</button></form>
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

     </div>

 </div>