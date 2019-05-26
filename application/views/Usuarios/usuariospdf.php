<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('My Title');
$pdf->SetHeaderMargin(30);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Clinica');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage();

$html=' <br><br>
<img src="'.base_url().'/resource/images/imagenes/logo.png" align="center"/>
<di  style="float:right"> Fecha: '.$h->format('Y-m-d').' <br>
 hora: '.$h2->format('H:i:s').'
</div>
<br>
 <h3 align="center">Datos De Los Usuarios</h3>
      <h4 align="center">Usuarios</h4>
         
     <table width="100%" align="center">
      <tr>
    <th style="border: 0px ; padding:12px;" width="5%">id</th>
    <th style="border: 0px ; padding:12px;" width="20%">Nombre</th>
    <th style="border: 0px ; padding:12px;" width="20%">Apellido Paterno</th>
    <th style="border: 0px ; padding:12px;" width="20%">Apellido Materno</th>
    <th style="border: 0px ; padding:12px;" width="20%">Usuario</th>
    <th style="border: 0px ; padding:12px;" width="15%">Rol</th>
   </tr>';
                    foreach ($user as $key) {
                        
                      $html .='  
                     <tr>
                         <td>'.$key['uID'].'</td>
                         <td>'.$key['nUsuario'].'</td>
                         <td>'.$key['uPaterno'].'</td>
                         <td>'.$key['uMaterno'].'</td>
                         <td>'.$key['usuario'].'</td>
                         <td>'.$key['uRol'].'</td>  
                     </tr>';
                }
            
         $html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('usuarios.pdf', 'I');