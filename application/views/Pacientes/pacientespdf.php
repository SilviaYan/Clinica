<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Pacientes');
$pdf->SetHeaderMargin(30);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Clinica');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage('L', 'A4');

$html=' <br><br>

<div align="center">
<img src="'.base_url().'/resource/images/imagenes/logo.png" align="center" />
</div> 

<div> Fecha: '.$h->format('Y-m-d').' <br>
 hora: '.$h2->format('H:i:s').'
</div>

<br>
 <h3 align="center">Datos De Los Pacientes</h3>
      <h4 align="center">Pacientes</h4>
         
     <table width="100%" align="center" border="1">
      <tr>
    <th style="padding:12px; background-color:red;" width="5%">id</th>
    <th style="padding:12px; background-color:red;" width="23%">Nombre Completo</th>
    <th style="padding:12px; background-color:red;" width="9%">Asegurado</th>
    <th style="padding:12px; background-color:red;" width="10%">fecha nacimiento</th>
    <th style="padding:12px; background-color:red;" width="10%">Sexo</th>
    <th style="padding:12px; background-color:red;" width="10%">Edad</th>
    <th style="padding:12px; background-color:red;" width="10%">Telefono</th>
    <th style="padding:12px; background-color:red;" width="10%">Direccion</th>
    <th style="padding:12px; background-color:red;" width="13%">Email</th>
    

   </tr>';
                    foreach ($patients as $key) {
                        
                      $html .='  
                    
 <tr>
                     <td scope="row" style="color: #000000;">'.$key['pID'].'</td>
                      <td style="color: #000000;">'.$key['pNombre'].' '.$key['pApellidoP'].' '.$key['pApellidoM'].' </td>
                      <td style="color: #000000;">'.$key['pAsegurado'].'</td>
                      <td style="color: #000000;">'.$key['pFechaNac'].'</td>
                      <td style="color: #000000;">'.$key['pSexo'].'</td>
                      <td style="color: #000000;">'.$key['pAño'].'</td>
                      <td style="color: #000000;">'.$key['pTelefono'].'</td>
                      <td style="color: #000000;">'.$key['pDireccion'].'</td>
                      <td style="color: #000000;">'.$key['email'].'</td>                     
</tr>';
                }
            
         $html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Pacientes.pdf', 'I');