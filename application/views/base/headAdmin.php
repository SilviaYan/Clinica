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
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosmenu2.css">

    <script src="<?= base_url(); ?>resource/js/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input#resultadoBusqueda").val('');
            load(1);

        });

        function buscar() {
            var textoBusqueda = $("input#busqueda").val();
            if (textoBusqueda != "") {
                $.post("<?php base_url() ?>Cotizaciones/getPatient", {
                    pID: textoBusqueda
                }, function(mensaje) {
                    $("input#resultadoBusqueda").val(mensaje);
                });
            } else {
                $("input#resultadoBusqueda").val('');
            };
        };
        /* CUANDO USAS LOAD, TE CARGA UN HTML EXTERNO EN UN DIV*/
        function load(page) {
            var p = $("input#txt").val();
            $("#loader").fadeIn('slow');
            $.ajax({
                url: '<?php base_url() ?>Cotizaciones/getProducts?action=ajax&page=' + page + '&p=' + p,
                beforeSend: function(objeto) {
                    $('#loader').html('<img src="<?= base_url(); ?>resource/images/iconos/search.png" width="10px" height="10px"> Cargando...');
                },
                success: function(data) {
                    $(".outer_div").html(data).fadeIn('fast');
                    $('#loader').html('');
                }
            })
        };
    </script>
    <script>
        function agregarProducto(id) {
            var cotID = $("input#cotID").val();
            var precio_venta = document.getElementById('precio_' + id).value;
            var cantidad = document.getElementById('cantidad_' + id).value;

            //Inicia validacion
            if (isNaN(cantidad)) {
                alert('Esto no es un número');
                document.getElementById('cantidad_' + id).focus();
                return false;
            }
            $.ajax({
                type: "POST",
                url: "<?php base_url() ?>Cotizaciones/showTable",
                data: "id=" + id + "&precio=" + precio_venta + "&cantidad=" + cantidad + "&cot=" + cotID,
                beforeSend: function(objeto) {
                    $("#resultados").html("Mensaje: Cargando...");
                },
                success: function(datos) {
                    $("#resultados").html(datos);
                }
            });
        };

        function eliminar(id) {

            $.ajax({
                type: "GET",
                url: "<?php base_url() ?>Cotizaciones/showTable",
                data: "id=" + id,
                beforeSend: function(objeto) {
                    $("#resultados").html("Mensaje: Cargando...");
                },
                success: function(datos) {
                    $("#resultados").html(datos);
                }
            });

        };
    </script>
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

        <a href="<?= base_url('') ?>Usuarios">
            <div class="contenedor" id="tres">
                <img class="icon" src="<?= base_url(); ?>resource/images/iconos/usuario.png">
                <a class="texto" href="<?= base_url(); ?>Usuarios">Usuarios</a>
            </div>
        </a>

        <a href="<?= base_url('') ?>Cotizaciones">
            <div class="contenedor" id="cuatro">
                <img class="icon" src="<?= base_url(); ?>resource/images/iconos/dinero.png">
                <a class="texto" href="<?= base_url(); ?>Cotizaciones">Cotizaciones</a>
                <ul class="submenu">
                    <li><a href="<?= base_url('') ?>Cotizaciones/cotizacionesList">Lista Cotizaciones</a></li>
            </div>
        </a>

        <a href=" <?= base_url('') ?>Login">
            <div class="contenedor" id="cinco">
                <img class="icono" src="<?= base_url(); ?>resource/images/iconos/salida.png">
                <a class="texto2" href="<?= base_url(); ?>Login">Logout</a>
            </div>
        </a>
    </div>
</header>