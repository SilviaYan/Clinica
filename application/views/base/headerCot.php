<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!Doctype htm l>
<html cla s s="no-js" la n g="e s">

<head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosPagAdmin2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilosmenu2.css">
    <script src="<?= base_url(); ?>resource/js/jquery-1.7.1.min.js"></script>
    <script>
        function agregarProducto(id) {
            /* los var fallan, ¿Qué debo hacer?*/ 
            var precio_venta = document.getElementById('precio' + id).value;
            var cantidad = document.getElementById('cantidad' + id).value;
            alert(cantidad);
            //Inicia validacion
            if (isNaN(cantidad)) {
                alert('Esto no es un número');
                document.getElementById('cantidad' + id).focus();
                return false;
            }
            $.ajax({
                type: "POST",
                url: "<?php base_url() ?>Cotizaciones/showTable",
                data: "id=" + id + "&precio=" + precio_venta + "&cantidad=" + cantidad,
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