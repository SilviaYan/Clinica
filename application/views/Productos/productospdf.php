<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Productos');
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
 hora: '.$h2->format('H:i:s'). '
</div>

<br>
 <h3 align="center">Datos De Los Productos</h3>
      <h4 align="center">Prodcutos</h4>
         
     <table width="100%" align="center" border="1">
      <tr>
    <th style="padding:12px; background-color:red;" width="5%">id</th>
    <th style="padding:12px; background-color:red;" width="10%">Nombre</th>
    <th style="padding:12px; background-color:red;" width="5%">precio</th>
    <th style="padding:12px; background-color:red;" width="5%">costo</th>
        <th style="padding:12px; background-color:red;" width="10%">categoria o tipo</th>

   </tr>';
                    foreach ($products as $key) {
                        
                      $html .='  
                    
 <tr>
                     <td scope="row" style="color: #000000;">'.$key['prodID'].'</td>
                      <td style="color: #000000;">'.$key['pProd'].'</td>
                      <td style="color: #000000;">'. $key['pPrecio'].'</td>
                      <td style="color: #000000;">'.$key['pCosto']. '</td>
                      <td style="color: #000000;">' . $key['pTipo'] . '</td>
</tr>';
                }
            
         $html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Productos.pdf', 'I');