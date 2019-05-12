<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <title> </title>
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/normalize.css" async>
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/style.css" async>
        <link href="<?= base_url(); ?>resource/images/favicon.PNG" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?= base_url(); ?>resource/css/radiocss.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/fontawesome-all.css" async >
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/jquery.dataTables.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilospagAdmin.css">
         <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosmenu.css">

        
        <!--<link rel="stylesheet" href="<?= base_url(); ?>resource/css/font-awesome.css" async >
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/TimeCircles.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/jquery.datetimepicker.min.css"> 
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/caja.css" />-->
    </head>


  
        <header>
       <!--   <div class="row d-flex justify-content-center pt-3">
            <div class="col-md-4 col-2 hidden-xs-up d-flex align-self-stretch align-self-start align-self-center  justify-content-center">
                <img class="barra d-inline-block align-top align-self-center" alt="Responsive image " src="<?= base_url();?>resource/images/barras_grises.jpg" alt="" />
            </div>
            <div class="barra col-12 col-md-3 d-flex align-self-stretch align-self-start align-self-center  justify-content-center">
                <img class=" d-inline-block align-top align-self-center" alt="Responsive image " src="<?= base_url();?>resource/images/LogoHeader.png" alt="sep"/>
            </div>
            <div class="col-md-4 col-2 d-flex align-self-stretch align-self-start align-self-center justify-content-center hidden-xs-down">
                <img class="barra d-inline-block align-top align-self-center" alt="Responsive image " src="<?= base_url();?>resource/images/barras_grises.jpg" alt="" />
            </div>
        </div>-->
        <div class="header">
            <h1><img src="<?= base_url(); ?>resource/images/imagenes/logo.png"></h1>
       </div>

    <a href="<?= base_url('')?>Productos"><div class="con" id="seis">
        <img class="icono" src="<?= base_url(); ?>resource/images/iconos/salida.png" >
        <span class="texto2">Logout</span>      
    </div></a>

         <div class="contenedor" id="uno">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/familia.png">
            <span class="texto">Pacientes</span>
            <ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li> 
            </ul>
        </div>

        <div class="contenedor" id="dos">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/medicina.png">
            <span class="texto">Productos</span>
           <!-- <ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>-->
        </div>

        <div class="contenedor" id="tres">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/usuario.png">
            <span class="texto">Usuarios</span>
            <ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>
        </div>

        <div class="contenedor" id="cuatro">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/dinero.png" >
            <span class="texto">Cotizaciones</span>
            <ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>
        </div>
        
        <div class="contenedor" id="cinco">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/portapapeles.png">
            <span class="texto">Consultas</span>
            <ul class="submenu">
                <li><a href="#">Pacientes</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Cotizaciones</a></li>
            </ul>
        </div>
    </header>
   <!-- <div class="btn-toolbar row d-flex justify-content-center pt-3" role="toolbar">
            <div class="btn-group" role="group">
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>Catalog">Inicio</a></button>
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>Productos">Productos</a></button>
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>CatalogoClientes">Clientes</a></button>
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>Prospecto">Prospectos</a></button>
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>UserAdmin">Pedidos</a></button>
                <button type="button" class ="btn btn-success"><a style="text-decoration: none;color:white;font-size:20px" href="<?= base_url('')?>Login">Cerrar sesión</a></button>
            </div>
    </div>-->
   <!-- <?php
        include("menuAdmin.php");
     ?> -->

   
  


        

