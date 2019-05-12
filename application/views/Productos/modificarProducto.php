<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Productos</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--meta:vp-->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"><!--link-->
</head> 
<body>
 <!--centrar pagina class container -->
 <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
  <form name="productos" id="productos" action="<?php echo base_url(); ?>Productos/modificarProduct" method="post">

    <br><br>
      <hr> <!--hr-inserta una barra horizontal-->
       <H3><label>Productos</label></H3>

       <div> <!--div,crea secciones o agrupa contenidos, ademas estrucurar el código y poder darles estilos --> 
        Nombre: <input type="text" class="form-control" name="nombre" value="<?=$producto[0]['pProd']?>"required autofocus />
       </div>
       <div>
        Descripción: <textarea name="descripcion" class="form-control" rows="10" cols="50"><?=$producto[0]['pDesc']?></textarea>
        <!--Descripción: <input type="text" class="form-control" name="descripcion" required>-->
       </div> 
       <div class="row">
       <div class="col-xs-6 col-md-4">
        Marca: <input type="text" class="form-control" name="marca" value="<?=$producto[0]['pMarca']?>">
       </div>
        <div class="col-xs-6 col-md-4">
        Precio: <input type="text" class="form-control" name="precio" value="<?=$producto[0]['pPrecio']?>">
       </div>
        <div class="col-xs-6 col-md-4">
        Costo: <input type="text" class="form-control" name="costo" value="<?=$producto[0]['pCosto']?>">
       </div>
     </div>
        <div>
        Proveedor: <input type="text" class="form-control" name="proveedor" value="<?=$producto[0]['pProv']?>">
       </div>
        <div class="row">
       <div class="col-xs-6 col-md-4">
        Tipo: <input type="text"  name="tipo"  class="form-control" value="<?=$producto[0]['pTipo']?>" required autofocus>
        </div>
        <div class="col-xs-6 col-md-4">
        Unidad: <input type="text" name="unidad" class="form-control" value="<?=$producto[0]['pUnidad']?>">
        </div>
       <div class="col-xs-6 col-md-4">
        Existencia: <input type="text" name="existencia" class="form-control" value="<?=$producto[0]['pExiste']?>">
        </div>
      </div>
        <br><br><br>
        <input type="hidden" name="idproducto" value="<?=$producto[0]['prodID']?>">
        
        
         <button type="submit" class="btn btn-primary">Modificar</button>
         
      
 <script src="bootstrap4/js/jquery.js"></script>  
  <script src="bootstrap4/js/bootstrap.min.js"></script>
</form>
</div>
</body>
</div>

</div>


