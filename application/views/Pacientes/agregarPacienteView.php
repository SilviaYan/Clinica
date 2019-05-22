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
<div class ="container"> <!--centrar pagina class container -->
 <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
  <form name="pacientes" id="pacientes" action="<?php echo base_url(); ?>Pacientes/agregarPaciente" method="post">
    <div style="float:right;"/><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
    </div>
    <br><br>
      <hr>
       <H3><label>Pacientes</label></H3>
       <div> <!--div,crea secciones o agrupa contenidos, ademas estrucurar el código y poder darles estilos --> 
        ID Paciente: <input type="text" class="form-control" name="pID" required autofocus />
        Nombre: <input type="text" class="form-control" name="pNombre" required autofocus />
        Apellido Materno: <input type="text" class="form-control" name="pApellidoM" required autofocus />
        Apellido Paterno: <input type="text" class="form-control" name="pApellidoP" required autofocus />
        Año: <input type="text" class="form-control" name="pAño" required autofocus />
        Sexo: <input type="text" class="form-control" name="pSExo" required autofocus />
        Estado: <input type="text" class="form-control" name="pEstado" required autofocus />
        Telefono: <input type="text" class="form-control" name="pTelefono" required autofocus />
        Fecha de Naciemiento: <input type="text" class="form-control" name="pFechaNac" required autofocus />
        Municipio: <input type="text" class="form-control" name="pMunicipio" required autofocus />
        Direccion: <input type="text" class="form-control" name="pDireccion" required autofocus />
        Email: <input type="text" class="form-control" name="email" required autofocus />
        Asegurado: <input type="text" class="form-control" name="pAsegurado" required autofocus />
        Lesiones: <input type="text" class="form-control" name="pLesionens" required autofocus />
        Transtornos: <input type="text" class="form-control" name="pTranstornos" required autofocus />
        Respiracion: <input type="text" class="form-control" name="pRespiracion" required autofocus />
        Envenenamiento: <input type="text" class="form-control" name="pEnvenamiento" required autofocus />
        otros: <input type="text" class="form-control" name="otros" required autofocus />
        Adiccion: <input type="text" class="form-control" name="pAdiccion" required autofocus />
        Alergias: <input type="text" class="form-control" name="pAlergias" required autofocus />
        Alcoholismo: <input type="text" class="form-control" name="pAlcoholismo" required autofocus />
        Cirujias: <input type="text" class="form-control" name="cirujias" required autofocus />
        Fracturas: <input type="text" class="form-control" name="fracturas" required autofocus />
        Transfuciones: <input type="text" class="form-control" name="transfuciones" required autofocus />
        ID Mod: <input type="text" class="form-control" name="pIDMod" required autofocus />
        Mod: <input type="text" class="form-control" name="pMod" required autofocus />
        ID Alta: <input type="text" class="form-control" name="pIDAlta" required autofocus />
        Alta: <input type="text" class="form-control" name="pAlta" required autofocus />
    
         <button type="submit" class="btn btn-primary">Agregar</button> 
         
     
 <script src="bootstrap4/js/jquery.js"></script>  
  <script src="bootstrap4/js/bootstrap.min.js"></script>
</form>
</div>
</body>
</div>

</div>