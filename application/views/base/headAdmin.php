<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/fontawesome-all.css" async>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilospagAdmin2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosmenu2.css">

</head>

<header>
    <div class="header2">
        <h1><img src="<?= base_url(); ?>resource/images/imagenes/logo.png"></h1>
    </div>

    <div class="con" id="seis">
        <img class="icono" src="<?= base_url(); ?>resource/images/iconos/salida.png">
        <!--<span class="texto2" >--><a class="texto2" href="<?= base_url(); ?>Login">Logout</a>
        <!--</span>-->
    </div>

    <a href="<?= base_url('') ?>pacientes">
        <div class="contenedor" id="uno">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/familia.png">
            <a class="texto" href="<?= base_url(); ?>Pacientes">Pacientes</a>
            <!--<ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>-->
        </div>
    </a>


    <a href="<?= base_url('') ?>productos">
        <div class="contenedor" id="dos">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/medicina.png">
            <!-- <span class="texto">--><a class="texto" href="<?= base_url(); ?>Productos">Productos</a>
            <!--</span>-->
            <!--<ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>-->
        </div>
    </a>

    <a href="<?= base_url('') ?>Usuarios">
        <div class="contenedor" id="tres">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/usuario.png">
            <!--<span class="texto">--><a class="texto" href="<?= base_url(); ?>Usuarios">Usuarios</a>
            <!--</span>-->
            <!--<ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>-->
        </div>
    </a>

    <a href="<?= base_url('') ?>Cotizaciones">
        <div class="contenedor" id="cuatro">
            <img class="icon" src="<?= base_url(); ?>resource/images/iconos/dinero.png">
            <!-- <span class="texto">--><a class="texto" href="<?= base_url(); ?>Cotizaciones">Cotizaciones</a>
            <!--</span>-->
            <!-- <ul class="submenu">
                <li><a href="#">Alta</a></li>
                <li><a href="#">Baja / Modificacion</a></li>
                <li><a href="#">Consultar</a></li>
            </ul>-->
        </div>
    </a>

    <div class="contenedor" id="cinco">
        <img class="icon" src="<?= base_url(); ?>resource/images/iconos/portapapeles.png">
        <!--  <span class="texto">Consultas</span>-->
        <a class="texto" href="">Reportes</a>
        <!-- <ul class="submenu">
                <li><a href="#">Pacientes</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Cotizaciones</a></li>
            </ul>-->
    </div>
</header>