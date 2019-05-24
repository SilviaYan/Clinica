<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Usuarios</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--meta:vp-->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"><!--link-->
</head> 
<body>
<div class ="container"> <!--centrar pagina class container -->
 <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
  <form name="usuarios" id="usuarios" action="<?php echo base_url(); ?>Usuarios/modificarUsuario" method="post">
    <div style="float:right;"><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
    </div>
    <br><br>
      <hr> <!--hr-inserta una barra horizontal-->
       <H3><label>Usuarios</label></H3>
       
       <div class="row">

       <div class="col-xs-6 col-md-4" > 
        Nombre: <input type="text" class="form-control" name="nombre" value="<?=$usuario[0]['nUsuario']?>" required autofocus />
       </div>

       <div class="col-xs-6 col-md-4">
        Apellido Paterno: <input type="text" class="form-control" name="Apaterno" value="<?=$usuario[0]['uPaterno']?>" required autofocus>
       </div>
        <div class="col-xs-6 col-md-4">
        Apellido Materno: <input type="text" class="form-control" name="Amaterno" value="<?=$usuario[0]['uMaterno']?>" required autofocus>
       </div>
       
     </div>

     <br><br>

     <div class="row">
     <div class="col-xs-6 col-md-4">
        Usuario: <input type="text" class="form-control" name="usuario" value="<?=$usuario[0]['usuario']?>" required autofocus>
       </div>

        <div class="col-xs-6 col-md-4">
        Contraseña: <input type="password" class="form-control" name="contrasena" value="<?=$usuario[0]['uPass']?>" required autofocus>
       </div>
        
       <div class="col-xs-6 col-md-4">
        Rol: <input type="text"  name="rol"  class="form-control" value="<?=$usuario[0]['uRol']?>" required autofocus>
        </div>
</div> 
<input type="hidden" name="idusuario" value="<?=$usuario[0]['uID']?>">
        <br><br>
         <button type="submit" class="btn btn-primary">Modificar</button> 
         
     
 <script src="bootstrap4/js/jquery.js"></script>  
  <script src="bootstrap4/js/bootstrap.min.js"></script>
</form>
</div>
</body>
</div>

</div>
