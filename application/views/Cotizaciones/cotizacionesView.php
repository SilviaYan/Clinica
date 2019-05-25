<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="container">
  <div style="float:right;" /><!-- ahora es de tipo flotante y se posiciona hacia la izquierda-->
</div>
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
    ID Cotización: <input type="text" class="form-control" name="cotID" required autofocus readonly />
  </div>
  <div class="col-xs-6 col-md-4">
    ID Usuario: <input type="text" class="form-control" name="uID" required autofocus readonly />
  </div>
  <div class="col">
    Lugar de Expedición: <input type="text" class="form-control" name="uID" required autofocus placeholder="Ingrese algún lugar..." />
  </div>
</div>
<!-- ROW PARTE 2-->
<div class="row">
  <div class="col-xs-6 col-md-4">
    ID Paciente: <input type="text" class="form-control" autofocus required />
  </div>
  <div class="col-xs-6 col-md-4">
    Nombre: <input type="text" class="form-control" name="cotID" autofocus readonly />
  </div>
  <div class="col-xs-6 col-md-4">
    Apellido Paterno: <input type="text" class="form-control" name="uID" autofocus readonly />
  </div>
</div>
<!-- ROW PARTE 3 -->
<div class="row">
  <div class="col-xs-6 col-md-4">
    ID Producto: <input type="text" class="form-control" required autofocus />
  </div>
  <div class="col-xs-6 col-md-4">
    Nombre del producto: <input type="text" class="form-control" name="cotID" autofocus readonly />
  </div>
  <div class="col-xs-6 col-md-4">
    Precio: <input type="text" class="form-control" name="uID" autofocus readonly />
  </div>
  <div class="col-xs-6 col-md-4">
    Cantidad: <input type="text" class="form-control" name="uID" autofocus required />
  </div>
  <div class="col-xs-6 col-md-4">
    Cantidad: <input type="text" class="form-control" name="uID" value="Efectivo" autofocus readonly />
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
  <!-- Div de los botones -->
  <input type="submit" name="metelosALaTabla" class="btn btn-primary " value="Añadir" />
  <!-- Debe existir un botón de borrado para cada ingreso en caso de que el usuario se haya equivocado,
       ya sea de forma dinámica o que seleccione la fila y se borre.-->
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
      <!-- 
        Lógica.
        - Se supone que cada vez que los campos estén ingresados, el iva, subtotal y total,
         se debe hacer sumatorias automáticamente...
          al igual que esto.
      -->
    </tbody>
  </table>
</div>
<br> <br>
  <!-- un form action para todo esto y que primero ingrese a la cotización, después que ingrese al detalle de cotización
       y genere un ticket. -->
</div>
<!--contenedor -- >