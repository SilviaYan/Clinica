<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Productos</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--meta:vp-->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"><!--link-->
</head> 
<body>
<div class ="container"> <!--centrar pagina class container -->
 <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
  <form name="productos" id="productos" action="<?php echo base_url(); ?>Productos/agregarProducto" method="post">
    <div style="float:right;"/><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
    </div>
    <br><br>
      <hr> <!--hr-inserta una barra horizontal-->
       <H3><label>Productos</label></H3>
       <div> <!--div,crea secciones o agrupa contenidos, ademas estrucurar el código y poder darles estilos --> 
        Nombre: <input type="text" class="form-control" name="nombre" required autofocus />
       </div>
       <div>
        Descripción: <textarea name="descripcion" class="form-control" rows="10" cols="50"></textarea>
        <!--Descripción: <input type="text" class="form-control" name="descripcion" required>-->
       </div> 
       <div class="row">
       <div class="col-xs-6 col-md-4">
        Marca: <input type="text" class="form-control" name="marca">
       </div>
        <div class="col-xs-6 col-md-4">
        Precio: <input type="number" min="1" class="form-control" name="precio" >
       </div>
        <div class="col-xs-6 col-md-4">
        Costo: <input type="number" min="1" class="form-control" name="costo" >
       </div>
     </div>
        <div>
        Proveedor: <input type="text" class="form-control" name="proveedor" >
       </div>
        <div class="row">
       <div class="col-xs-6 col-md-4">
        Tipo: <input type="text"  name="tipo"  class="form-control"  required autofocus>
        </div>
        <div class="col-xs-6 col-md-4">
        Unidad: <input type="number" name="unidad" min="1" class="form-control" >
        </div>
        <div class="col-xs-6 col-md-4">
        Existencia: <input type="number" min="1" name="existencia" class="form-control" ></div>
        </div>
        <br><br><br>
         <button type="submit" class="btn btn-primary">Agregar</button> 
         
     
 <script src="bootstrap4/js/jquery.js"></script>  
  <script src="bootstrap4/js/bootstrap.min.js"></script>
</form>
</div>
</body>
</div>

</div>
