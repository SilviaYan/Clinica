<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Pacientes</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--meta:vp-->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"><!--link-->
</head> 
<body>
<div class ="container"> <!--centrar pagina class container -->
 <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
  <form name="pacientes" id="pacientes" action="<?php echo base_url(); ?>Pacientes/modPaciente" method="post">
    <div style="float:right;"><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
    </div>
    <br><br>
      <hr> <!--hr-inserta una barra horizontal-->
       <H3><label>Pacientes</label></H3>
       Nombre: <input type="text" class="form-control" name="nombre" value="<?=$paciente[0]['pNombre']?>" required autofocus />
        Apellido Materno: <input type="text" class="form-control" name="apellidoM" value="<?=$paciente[0]['pApellidoM']?>" required autofocus />
        Apellido Paterno: <input type="text" class="form-control" name="apellidoP" value="<?=$paciente[0]['pApellidoP']?>" required autofocus />
        Año: <input type="text" class="form-control" name="año" value="<?=$paciente[0]['pAño']?>" required autofocus />
        Sexo: <input type="text" class="form-control" name="sexo" value="<?=$paciente[0]['pSexo']?>" required autofocus />
        Estado: <input type="text" class="form-control" name="estado" value="<?=$paciente[0]['pEstado']?>" required autofocus />
        Telefono: <input type="text" class="form-control" name="telefono" value="<?=$paciente[0]['pTelefono']?>" required autofocus />
        Fecha de Naciemiento: <input type="date" class="form-control" name="fecha" value="<?=$paciente[0]['pFechaNac']?>" required autofocus />
        Municipio: <input type="text" class="form-control" name="municipio" value="<?=$paciente[0]['pMunicipio']?>" required autofocus />
        Direccion: <input type="text" class="form-control" name="direccion" value="<?=$paciente[0]['pDireccion']?>" required autofocus />
        Email: <input type="text" class="form-control" name="email" value="<?=$paciente[0]['email']?>" required autofocus />
        Asegurado: <input type="text" class="form-control" name="asegurado" value="<?=$paciente[0]['pAsegurado']?>" required autofocus />
        Lesiones: <input type="text" class="form-control" name="lesiones" value="<?=$paciente[0]['pLesiones']?>" required autofocus />
        Transtornos: <input type="text" class="form-control" name="transtornos" value="<?=$paciente[0]['pTranstornos']?>" required autofocus />
        Respiracion: <input type="text" class="form-control" name="respiratorios" value="<?=$paciente[0]['pRespiracion']?>" required autofocus />
        Envenenamiento: <input type="text" class="form-control" name="envenenamiento" value="<?=$paciente[0]['pEnvenenamiento']?>" required autofocus />
        otros: <input type="text" class="form-control" name="otros" value="<?=$paciente[0]['otros']?>" required autofocus />
        Adiccion: <input type="text" class="form-control" name="adicciones" value="<?=$paciente[0]['pAdiccion']?>" required autofocus />
        Alergias: <input type="text" class="form-control" name="alergias" value="<?=$paciente[0]['pAlergias']?>" required autofocus />
        Alcoholismo: <input type="text" class="form-control" name="alcoholismo" value="<?=$paciente[0]['pAlcoholismo']?>" required autofocus />
        Cirujias: <input type="text" class="form-control" name="cirujias" value="<?=$paciente[0]['cirujias']?>" required autofocus />
        Fracturas: <input type="text" class="form-control" name="fracturas" value="<?=$paciente[0]['fracturas']?>" required autofocus />
        Transfuciones: <input type="text" class="form-control" name="transfusiones" value="<?=$paciente[0]['transfusiones']?>" required autofocus />
    
</div> 
<input type="hidden" name="idpaciente" value="<?=$paciente[0]['pID']?>">
        <br><br>
         <button type="submit" class="btn btn-primary">Modificar</button> 
         
     
 <script src="bootstrap4/js/jquery.js"></script>  
  <script src="bootstrap4/js/bootstrap.min.js"></script>
</form>
</div>
</body>
</div>

</div>
