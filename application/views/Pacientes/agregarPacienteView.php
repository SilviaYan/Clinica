<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Pacientes</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!--meta:vp-->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <!--link-->
</head>

<body>
  <div class="container">
    <!--centrar pagina class container -->
    <!-- <form name="frm" id="frm" action="<?php echo base_url(); ?>Productos/nuevoProducto" method="post" target="_blank">-->
    <form name="pacientes" id="pacientes" action="<?php echo base_url(); ?>Pacientes/agregarPaciente" method="post">
      <div style="float:right;" /><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
  </div>
  <br><br>
  <hr>
  <H3><label>Pacientes</label></H3>
  <div class="row">
    <div class="col-xs-6 col-md-4">
      Nombre: <input type="text" class="form-control" name="nombre" required autofocus />
    </div>

    <div class="col-xs-6 col-md-4">
      Apellido Paterno: <input type="text" class="form-control" name="apellidoP" required autofocus />
    </div>
    <div class="col-xs-6 col-md-4">
      Apellido Materno: <input type="text" class="form-control" name="apellidoM" required autofocus />
    </div>
  </div>

  <div class="row">
    <div class="col-xs-6 col-md-4">
      Fecha de Naciemiento: <input type="date" class="form-control" name="fecha" required autofocus />
    </div>
    <div class="col-xs-6 col-md-4">
      Año(s): <input type="number" max="100" class="form-control" name="año" required autofocus />
    </div>
    <div class="col-xs-6 col-md-4">
      Sexo: <input type="text" class="form-control" name="sexo" required autofocus />
    </div>
  </div>

  <div class="row">
    <div class="form-group col-xs-6 col-md-4">
      Estados:<select id="inputState" name="estado" class="form-control" required>
        <option value="EdoMex"> Estado de México</option>
        <option value="Jalisco"> Jalisco</option>
        <option value="Michoacan"> Michoacan</option>
        <option value="BC"> Baja California</option>
        <option value="Guanajuato" selected> Guanajuato</option>
        <option value="Chiapas"> Chiapas</option>
        <option value="NvoLeon"> Nuevo León</option>
        <option value="Yucatan"> Yucatan</option>
        <option value="Sonora"> Sonora</option>
        <option value="Sinaloa"> Chiapas</option>
        <option value="EdoHgo"> Estado de Hidalgo</option>
        <option value="Puebla"> Puebla</option>
        <option value="Tamaulipas"> Tamaulipas</option>
        <option value="Guerrero"> Guerrero</option>
        <option value="QuinRoo"> Quintana Roo</option>
        <option value="Cohauila"> Coahuila de Zaragoza</option>
        <option value="Queretaro"> Querétaro</option>
        <option value="Morelos"> Morelos</option>
        <option value="Veracruz"> Veracruz</option>
        <option value="Zacatecas"> Zacatecas</option>
        <option value="Nayarit"> Nayarit</option>
        <option value="Tabasco"> Tabasco</option>
        <option value="Oaxaca"> Oaxaca</option>
        <option value="Chihuahua"> Chihuahua</option>
        <option value="Durango"> Guerrero</option>
        <option value="BCS"> Baja California Sur</option>
        <option value="SLP"> San Luis Potosí</option>
        <option value="Aguascalientes"> Aguascalientes</option>
        <option value="Tlaxcala"> Tlaxcala</option>
        <option value="Colima"> Colima</option>
        <option value="Campeche"> Campeche</option>
      </select>
    </div>
    <div class="col-xs-6 col-md-4">
      Municipio: <input type="text" class="form-control" name="municipio" required autofocus />
    </div>
    <div class="col-xs-6 col-md-4">
      Dirección: <input type="text" class="form-control" name="direccion" required autofocus />
    </div>
  </div>

  <div class="row">
    <div class="col-xs-6 col-md-4">
      Teléfono: <input type="text" class="form-control" name="telefono" required autofocus placeholder="XXX-XXX-XXXX" />
    </div>
    <div class="col-xs-6 col-md-4">
      E-mail: <input type="text" class="form-control" name="email" required autofocus placeholder="example@example.com" />
    </div>
    <div class="form-group col-md-4">
      Asegurado:<select id="inputState" name="asegurado" class="form-control" required autofocus>
        <option selected value="No"> No</option>
        <option value="Si"> Si</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col">
      Lesiones: <input type="text" class="form-control" name="lesiones" autofocus />
    </div>
    <div class="col">
      Transtornos: <input type="text" class="form-control" name="transtornos" autofocus />
    </div>
  </div>
  <div class="row">
    <div class="col">
      Respiración: <input type="text" class="form-control" name="respiratorios" autofocus />
    </div>
    <div class="col">
      Envenenamiento: <input type="text" class="form-control" name="envenenamiento" autofocus />
    </div>
  </div>

  <div class="form-group">
    Otros:
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="otros" autofocus></textarea>
  </div>

  <div class="row">
    <div class="col">
      Adiccion(es): <input type="text" class="form-control" name="adicciones" autofocus />
    </div>
    <div class="col">
      Alergias: <input type="text" class="form-control" name="alergias" autofocus />
    </div>
  </div>
  <div class="row">
    <div class="col">
      Alcoholismo: <input type="text" class="form-control" name="alcoholismo" autofocus />
    </div>
    <div class="col">
      Cirujías: <input type="text" class="form-control" name="cirujias" autofocus />
    </div>
  </div>

  <div class="row">
    <div class="col">
      Fracturas: <input type="text" class="form-control" name="fracturas" autofocus />
    </div>
    <div class="col">
      Transfusiones: <input type="text" class="form-control" name="transfusiones" autofocus />
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Agregar</button>

  <script src="bootstrap4/js/jquery.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>
  </form>
  </div>
</body>
</div>

</div>