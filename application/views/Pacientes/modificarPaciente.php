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
    <form name="pacientes" id="pacientes" action="<?php echo base_url(); ?>Pacientes/modPaciente" method="post">
      <div style="float:right;">
        <!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
      </div>
      <br><br>
      <hr>
      <!--hr-inserta una barra horizontal-->
      <H3><label>Pacientes</label></H3>

      <div class="row">
        <div class="col-xs-6 col-md-4">
          Nombre: <input type="text" class="form-control" name="nombre" value="<?= $paciente[0]['pNombre'] ?>" required autofocus />
        </div>

        <div class="col-xs-6 col-md-4">
          Apellido Materno: <input type="text" class="form-control" name="apellidoM" value="<?= $paciente[0]['pApellidoM'] ?>" required autofocus />
        </div>
        <div class="col-xs-6 col-md-4">
          Apellido Paterno: <input type="text" class="form-control" name="apellidoP" value="<?= $paciente[0]['pApellidoP'] ?>" required autofocus />
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">
          Fecha de Naciemiento: <input type="date" class="form-control" name="fecha" value="<?= $paciente[0]['pFechaNac'] ?>" required autofocus />
        </div>
        <div class="col-xs-6 col-md-4">
          Año(s): <input type="text" class="form-control" name="año" value="<?= $paciente[0]['pAño'] ?>" required autofocus />
        </div>
        <div class="col-xs-6 col-md-4">
          Sexo: <input type="text" class="form-control" name="sexo" value="<?= $paciente[0]['pSexo'] ?>" required autofocus />
        </div>
      </div>

      <div class="row">
        <?php
        $aux2 = $paciente[0]['pEstado'];
        $edo1 = "";
        $edo2 = "";
        $edo3 = "";
        $edo4 = "";
        $edo5 = "";
        $edo6 = "";
        $edo7 = "";
        $edo8 = "";
        $edo9 = "";
        $edo10 = "";
        $edo11 = "";
        $edo12 = "";
        $edo13 = "";
        $edo14 = "";
        $edo15 = "";
        $edo16 = "";
        $edo17 = "";
        $edo18 = "";
        $edo19 = "";
        $edo20 = "";
        $edo21 = "";
        $edo22 = "";
        $edo23 = "";
        $edo24 = "";
        $edo25 = "";
        $edo26 = "";
        $edo27 = "";
        $edo28 = "";
        $edo29 = "";
        $edo30 = "";
        $edo31 = "";

        switch ($aux2) {
          case "EdoMex":
            $edo1 = "selected";
            break;
          case "Jalisco":
            $edo2 = "selected";
            break;
          case "Michoacan":
            $edo3 = "selected";
            break;
          case "BC":
            $edo4 = "selected";
            break;
          case "Guanajuato":
            $edo5 = "selected";
            break;
          case "Chiapas":
            $edo6 = "selected";
            break;
          case "NvoLeon":
            $edo7 = "selected";
            break;
          case "Yucatan":
            $edo8 = "selected";
            break;
          case "Sonora":
            $edo9 = "selected";
            break;
          case "Sinaloa":
            $edo10 = "selected";
            break;
          case "EdoHgo":
            $edo11 = "selected";
            break;
          case "Puebla":
            $edo12 = "selected";
            break;
          case "Tamaulipas":
            $edo13 = "selected";
            break;
          case "Guerrero":
            $edo14 = "selected";
            break;
          case "QuinRoo":
            $edo15 = "selected";
            break;
          case "Cohauila":
            $edo16 = "selected";
            break;
          case "Queretaro":
            $edo17 = "selected";
            break;
          case "Morelos":
            $edo18 = "selected";
            break;
          case "Veracruz":
            $edo19 = "selected";
            break;
          case "Zacatecas":
            $edo20 = "selected";
            break;
          case "Nayarit":
            $edo21 = "selected";
            break;
          case "Tabasco":
            $edo22 = "selected";
            break;
          case "Oaxaca":
            $edo23 = "selected";
            break;
          case "Chihuahua":
            $edo24 = "selected";
            break;
          case "Durango":
            $edo25 = "selected";
            break;
          case "BCS":
            $edo26 = "selected";
            break;
          case "SLP":
            $edo27 = "selected";
            break;
          case "Aguascalientes":
            $edo29 = "selected";
            break;
          case "Tlaxcala":
            $edo29 = "selected";
            break;
          case "Colima":
            $edo30 = "selected";
            break;
          case "Campeche":
            $edo31 = "selected";
            break;
          case " ":
          $default = "selected";
            break;
        }

        ?>
        <div class="form-group col-xs-6 col-md-4">
          Estado:<select id="inputState" name="asegurado" class="form-control">
            <option <?php echo $default ?>> Selecciona un edo</option>
            <option value="EdoMex" <?php echo $edo1 ?>> Estado de México</option>
            <option value="Jalisco" <?php echo $edo2 ?>> Jalisco</option>
            <option value="Michoacan" <?php echo $edo3 ?>> Michoacan</option>
            <option value="BC" <?php echo $edo4 ?>> Baja California</option>
            <option value="Guanajuato" <?php echo $edo5 ?>> Guanajuato</option>
            <option value="Chiapas" <?php echo $edo6 ?>> Chiapas</option>
            <option value="NvoLeon" <?php echo $edo7 ?>> Nuevo León</option>
            <option value="Yucatan" <?php echo $edo8 ?>> Yucatan</option>
            <option value="Sonora" <?php echo $edo9 ?>> Sonora</option>
            <option value="Sinaloa" <?php echo $edo10 ?>> Chiapas</option>
            <option value="EdoHgo" <?php echo $edo11 ?>> Estado de Hidalgo</option>
            <option value="Puebla" <?php echo $edo12 ?>> Puebla</option>
            <option value="Tamaulipas" <?php echo $edo13 ?>> Tamaulipas</option>
            <option value="Guerrero" <?php echo $edo14 ?>> Guerrero</option>
            <option value="QuinRoo" <?php echo $edo15 ?>> Quintana Roo</option>
            <option value="Cohauila" <?php echo $edo16 ?>> Coahuila de Zaragoza</option>
            <option value="Queretaro" <?php echo $edo17 ?>> Querétaro</option>
            <option value="Morelos" <?php echo $edo18 ?>> Morelos</option>
            <option value="Veracruz" <?php echo $edo19 ?>> Veracruz</option>
            <option value="Zacatecas" <?php echo $edo20 ?>> Zacatecas</option>
            <option value="Nayarit" <?php echo $edo21 ?>> Nayarit</option>
            <option value="Tabasco" <?php echo $edo22 ?>> Tabasco</option>
            <option value="Oaxaca" <?php echo $edo23 ?>> Oaxaca</option>
            <option value="Chihuahua" <?php echo $edo24 ?>> Chihuahua</option>
            <option value="Durango" <?php echo $edo25 ?>> Guerrero</option>
            <option value="BCS" <?php echo $edo26 ?>> Baja California Sur</option>
            <option value="SLP" <?php echo $edo27 ?>> San Luis Potosí</option>
            <option value="Aguascalientes" <?php echo $edo28 ?>> Aguascalientes</option>
            <option value="Tlaxcala" <?php echo $edo29 ?>> Tlaxcala</option>
            <option value="Colima" <?php echo $edo30 ?>> Colima</option>
            <option value="Campeche" <?php echo $edo31 ?>> Campeche</option>
          </select>
        </div>
        <div class="col-xs-6 col-md-4">
          Municipio: <input type="text" class="form-control" name="municipio" value="<?= $paciente[0]['pMunicipio'] ?>" required autofocus />
        </div>
        <div class="col-xs-6 col-md-4">
          Dirección: <input type="text" class="form-control" name="direccion" value="<?= $paciente[0]['pDireccion'] ?>" required autofocus />
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6 col-md-4">
          Teléfono: <input type="text" class="form-control" name="telefono" required autofocus value="<?= $paciente[0]['pTelefono'] ?>" />
        </div>
        <div class="col-xs-6 col-md-4">
          E-mail: <input type="text" class="form-control" name="email" required autofocus value="<?= $paciente[0]['email'] ?>" />
        </div>
        <div class="form-group col-md-4">
          <?php
          $aux = $paciente[0]['pAsegurado'];
          switch ($aux) {
            case "Si":
              $var1 = "selected";
              $var2 = "";
              break;
            case "No":
              $var1 = "";
              $var2 = "selected";
              break;
          }
          ?>
          Asegurado:<select id="inputState" name="asegurado" class="form-control">
            <option value="No" <?php echo $var2 ?>> No</option>
            <option value="Si" <?php echo $var1 ?>> Si</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Lesiones: <input type="text" class="form-control" name="lesiones" value="<?= $paciente[0]['pLesiones'] ?>" autofocus />
        </div>
        <div class="col">
          Transtornos: <input type="text" class="form-control" name="transtornos" value="<?= $paciente[0]['pTranstornos'] ?>" autofocus />
        </div>
      </div>
      <div class="row">
        <div class="col">
          Respiración: <input type="text" class="form-control" name="respiratorios" value="<?= $paciente[0]['pRespiracion'] ?>" autofocus />
        </div>
        <div class="col">
          Envenenamiento: <input type="text" class="form-control" name="envenenamiento" value="<?= $paciente[0]['pEnvenenamiento'] ?>" autofocus />
        </div>
      </div>

      <div class="form-group">
        Otros:
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="otros" value="<?= $paciente[0]['otros'] ?>"></textarea>
      </div>

      <div class="row">
        <div class="col">
          Adiccion(es): <input type="text" class="form-control" name="adicciones" value="<?= $paciente[0]['pAdiccion'] ?>" autofocus />
        </div>
        <div class="col">
          Alergias: <input type="text" class="form-control" name="alergias" value="<?= $paciente[0]['pAlergias'] ?>" autofocus />
        </div>
      </div>
      <div class="row">
        <div class="col">
          Alcoholismo: <input type="text" class="form-control" name="alcoholismo" value="<?= $paciente[0]['pAlcoholismo'] ?>" autofocus />
        </div>
        <div class="col">
          Cirujías: <input type="text" class="form-control" name="cirujias" value="<?= $paciente[0]['cirujias'] ?>" autofocus />
        </div>
      </div>

      <div class="row">
        <div class="col">
          Fracturas: <input type="text" class="form-control" name="fracturas" value="<?= $paciente[0]['fracturas'] ?>" autofocus />
        </div>
        <div class="col">
          Transfusiones: <input type="text" class="form-control" name="transfusiones" autofocus value="<?= $paciente[0]['transfusiones'] ?>" />
        </div>
      </div>
  </div>
  <input type="hidden" name="idpaciente" value="<?= $paciente[0]['pID'] ?>">
  <br><br>
  <button type="submit" class="btn btn-primary">Modificar</button>

  <script src="bootstrap4/js/jquery.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>
  </form>
  </div>
</body>
</div>
</div>