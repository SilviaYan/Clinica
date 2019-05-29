<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!Doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/normalize.css" async>
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/style.css" async>
    <link href="<?= base_url(); ?>resource/images/favicon.PNG" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url(); ?>resource/css/radiocss.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/fontawesome-all.css" async>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosPagAdmin2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosmenu_user.css">

</head>

<header>
    <div class="container">
        <div class="header2">
            <img src="<?= base_url(); ?>resource/images/imagenes/logo.png">
        </div>

        <a href="<?= base_url('') ?>pacientes">
            <div class="contenedor" id="uno">
                <img class="icon" src="<?= base_url(); ?>resource/images/iconos/familia.png">
                <a class="texto" href="<?= base_url(); ?>Pacientes">Pacientes</a>
            </div>
        </a>

        <a href="<?= base_url('') ?>productos">
            <div class="contenedor" id="dos">
                <img class="icon" src="<?= base_url(); ?>resource/images/iconos/medicina.png">
                <a class="texto" href="<?= base_url(); ?>Productos">Productos</a>
            </div>
        </a>

        <a href="<?= base_url('') ?>Cotizaciones">
            <div class="contenedor" id="cuatro">
                <img class="icon" src="<?= base_url(); ?>resource/images/iconos/dinero.png">
                <a class="texto" href="<?= base_url(); ?>Cotizaciones">Cotizaciones</a>
            </div>
        </a>

        <a href="<?= base_url('') ?>Login">
            <div class="contenedor" id="cinco">
                <img class="icono" src="<?= base_url(); ?>resource/images/iconos/salida.png">
                <a class="texto2" href="<?= base_url(); ?>Login">Logout</a>
            </div>
        </a>
    </div>
</header>