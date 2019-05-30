<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="container">
  <div style="float:right;" /><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->

  <br><br>
  <hr>
  <!--hr-inserta una barra horizontal-->
  <H3><label>Cotización</label></H3> <br>
  <!-- ROW PARTE 1 -->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      <form name="cotizacion" id="cotizacion" action="<?php echo base_url(); ?>Cotizaciones/agregarCotizacion" method="post">
        Fecha: <input type="date" name="fecha" class="form-control" required />
    </div>

    <div class="col-xs-6 col-md-4">
      ID Cotización: <input type="text" class="form-control" name="cotID" id="cotID" value="<?php echo $id[0] ?>" required autofocus readonly />
    </div>
    <div class="col-xs-6 col-md-4">
      ID Usuario: <input type="text" class="form-control" name="uID" value="<?= $_SESSION['userid']; ?>" required autofocus readonly />
    </div>
    <div class="col">
      Lugar de Expedición: <input type="text" class="form-control" name="exp" required autofocus placeholder="Ingrese algún lugar..." />
    </div>
  </div>
  <!-- ROW PARTE 2-->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      ID Paciente: <input type="text" class="form-control" id="busqueda" name="pID" onkeyup="buscar();" autofocus required />
    </div>
    <div class="col-xs-6 col-md-8">
      Paciente: <input type="text" class="form-control" id="resultadoBusqueda" autofocus readonly />
    </div>

  </div>
  <!-- ROW PARTE 3 -->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      Pago: <input type="text" class="form-control" name="pago" value="Efectivo" autofocus readonly />
    </div>
  </div>
  <br>
  <input type="button" id="buscarProd" name="metelosALaTabla" class="btn btn-primary " value="Añadir Productos" data-toggle="modal" data-target="#myModal" />
  <input type="submit" value="Finalizar Cotización" class="btn btn-success" />
  <br><br>
  </form>
  <div id="resultados" class='col-md-12'></div><!-- Carga los datos ajax -->

  <div>
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Buscar productos</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="txt" placeholder="Buscar productos" onkeyup="load(1)">
                </div>
              </div>
            </form>
            <div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
            <div class="outer_div"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>