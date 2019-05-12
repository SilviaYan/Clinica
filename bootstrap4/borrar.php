<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$carpetaAdjunta="bootstrap-fileinput-master/fotos/";
if($_SERVER['REQUEST_METHOD']=="DELETE"){
           parse_srt(file_get_contets("php://input"), $datosDELETE);
           $key = $datosDELETE['key'];
           unlink($carpetaAdjunta.$key);
           echo 0;
 }
 ?>