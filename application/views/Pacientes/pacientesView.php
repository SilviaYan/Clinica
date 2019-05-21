 <!-- Titulo -->


 <div class="row m-1 pt-2  col-12 justify-content-center">

     <div class="row m-1 pt-2  col-12 justify-content-center">
         <!--<H5 style="color:green">PRODUCTOS</H5>-->
         <table class="table table-hover table-striped col-12" id="tablaUsuario" style="width:120%">
             <thead class="" style="background-color:#A1ABA1">
                 <tr>
                     <th width="20%">ID Paciente</th>
                     <th width="20%">Nombre</th>
                     <th width="20%">Apellido Paterno</th>
                     <th width="20%">Apellido Materno</th>
                     <th width="20%">Email</th>
                     <th width="6%"><i class="fas fa-pencil-alt"></i></th>
                     <th width="6%"><i class="fas fa-trash-alt"></i></th>
                 </tr>
             </thead>
             <tbody>
                 <br>
                 <?php
                    foreach ($user as $key) {
                        ?>
                     <tr>
                         <th scope="row" style="color: #000000;"><?= $key['uID'] ?></th>
                         <td style="color: #000000;"><?= $key['nUsuario'] ?></td>
                         <td style="color: #000000;"><?= $key['uPaterno'] ?></td>
                         <td style="color: #000000;"><?= $key['uMaterno'] ?></td>
                         <td style="color: #000000;"><?= $key['usuario'] ?></td>
                         <td style="color: #000000;"><?= $key['uRol'] ?></td>

                         <!-- modificar-->

                         <td>
                             <form action='<?= base_url('') ?>Usuarios/editar' method='post'><button type="submit" class="btn btn-info btn-circle gira" value="<?= $key['uID'] ?>" id="editar" name="editar"><i class="fas fa-pencil-alt"></i></button></form>
                         </td>
                         <!--Eliminar-->
                         <td> <button type="button" class="btn btn-danger btn-circle gira" data-toggle="modal" data-target="#confirmacionEliminar<?= $key['uID'] ?>"><i class="fas fa-trash-alt"></i></button>

                             <div class="modal fade" id="confirmacionEliminar<?= $key['uID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalCenterTitle">¿Eliminar a <?= $key['uID'] ?>? </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <h5> El usuario <strong><?= $key['uID'] ?></strong> será eliminado.
                                                 ¿Estas seguro de continuar con esta acción?</h5>


                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                             <form action='<?= base_url('') ?>Usuarios/eliminar' method='post'><button type="submit" class="btn btn-danger" value="<?= $key['uID'] ?>" id="eliminar" name="eliminar" data-target="#exampleModalCenter">Eliminar</button></form>
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
     <!-- Agregar nuevo registro-->
     <a href="<?= base_url('') ?>Usuarios/nuevoPaciente" class="btn btn-info">AGREGAR</a>
 </div>