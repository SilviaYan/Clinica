<!-- Titulo -->


<div class="row m-1 pt-2  col-12 justify-content-center">

    <div class="row m-1 pt-2  col-12 justify-content-center">
        <!--<H5 style="color:green">PRODUCTOS</H5>-->
        <table class="table table-hover table-striped col-12" id="tablaUsuario" style="width:100%">
            <thead class="" style="background-color:#A1ABA1">
                <tr>
                    <th width="20%">ID</th>
                    <th width="20%">Nombre</th>
                    <th width="20%">Apellido Paterno</th>
                    <th width="20%">Apellido Materno</th>
                    <th width="20%">Email </th>
                    <th width="6%"><i class="fas fa-pencil-alt"></i></th>
                    <th width="6%"><i class="fas fa-trash-alt"></i></th>
                </tr>
            </thead>
            <tbody>
                <br>
                <?php
                foreach ($patients as $key) {
                    ?>
                    <tr>
                        <th scope="row" style="color: #000000;"><?= $key['pID'] ?></th>
                        <td style="color: #000000;"><?= $key['pNombre'] ?></td>
                        <td style="color: #000000;"><?= $key['pApellidoP'] ?></td>
                        <td style="color: #000000;"><?= $key['pApellidoM'] ?></td>
                        <td style="color: #000000;"><?= $key['email'] ?></td>
                        <td>
                            <form action='<?= base_url('') ?>Pacientes/modificar' method='post'>
                                <button type="submit" class="btn btn-info btn-circle gira" value="<?= $key['pID'] ?>" id="editar" name="editar"><i class="fas fa-pencil-alt"></i></button></form>
                        </td>
                        <td> <button type="button" class="btn btn-danger btn-circle gira" data-toggle="modal" data-target="#confirmacionEliminar<?= $key['pID'] ?>"><i class="fas fa-trash-alt"></i></button>

                             <div class="modal fade" id="confirmacionEliminar<?= $key['pID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalCenterTitle">¿Eliminar a <?= $key['pID'] ?>? </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <h5> El paciente <strong><?= $key['pID'] ?></strong> será eliminado.
                                                 ¿Estas seguro de continuar con esta acción?</h5>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                             <form action='<?= base_url('') ?>Pacientes/eliminar' method='post'><button type="submit" class="btn btn-danger" value="<?= $key['pID'] ?>" id="eliminar" name="eliminar" data-target="#exampleModalCenter">Eliminar</button></form>
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
    <a href="<?= base_url('') ?>Pacientes/nuevoPaciente" class="btn btn-info">AGREGAR</a>