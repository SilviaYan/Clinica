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
      Fecha: <input type="date" class="form-control" required />
    </div>

    <div class="col-xs-6 col-md-4">
      ID Cotización: <input type="text" class="form-control" name="cotID" value="<?php echo $id[0] ?>" required autofocus readonly />
    </div>
    <div class="col-xs-6 col-md-4">
      ID Usuario: <input type="text" class="form-control" name="uID" required autofocus readonly />
    </div>
    <div class="col">
      Lugar de Expedición: <input type="text" class="form-control" name="" required autofocus placeholder="Ingrese algún lugar..." />
    </div>
  </div>
  <!-- ROW PARTE 2-->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      <!-- onkeyup="buscar();" -->
      ID Paciente: <input type="text" class="form-control" id="busqueda" name="pID" onkeyup="buscar();" autofocus required />
    </div>
    <div class="col-xs-6 col-md-8">
      Paciente: <input type="text" class="form-control" id="resultadoBusqueda" autofocus readonly />
    </div>

  </div>
  <!-- ROW PARTE 3 -->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      Pago: <input type="text" class="form-control" name="uID" value="Efectivo" autofocus readonly />
    </div>
  </div>
  <!-- ROW PARTE 4 -->
  <div class="row">
    <div class="col-xs-6 col-md-4">
      IVA: <input type="text" class="form-control" readonly autofocus />
    </div>
    <div class="col-xs-6 col-md-4">
      Subtotal: <input type="text" class="form-control" name="cotID" autofocus readonly />
    </div>
    <div class="col-xs-6 col-md-4">
      Total: <input type="text" class="form-control" name="uID" autofocus readonly />
    </div>
  </div>
  <br>
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
                  <input type="text" class="form-control" id="txt" name="prod" placeholder="Buscar productos" onkeyup="load(1)">
                </div>
              </div>
            </form>
            <div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
            <div class="outer_div"> Aquí tus datos weh.</div><!-- Datos ajax Final -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <input type="button" id="buscarProd" name="metelosALaTabla" class="btn btn-primary " value="Añadir Productos" data-toggle="modal" data-target="#myModal" />
    <input type="submit" name="" class="btn btn-success " value="Finalizar Cotización" />
  </div>
  <br><br>
  <div class="table-responsive">
    <table class="table-hover table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col"> # Producto</th>
          <th scope="col"> N. Producto</th>
          <th scope="col"> Cantidad</th>
          <th scope="col"> Precio Unit.</th>
          <th scope="col"> Importe</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>