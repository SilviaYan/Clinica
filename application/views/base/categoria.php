<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html class="no-js" lang="es">

    
        <?php if($categoria == null){ ?>
            <h1 align='center' style='color:black'><strong>Todos los productos</strong></h1>
        <?php }else if($categoria == "Todo"){ ?>
            <h1 align='center' style='color:black'><strong>Todos los productos</strong></h1>
        <?php }else if($categoria == "Limpieza"){ ?>
            <h1 align='center' style='color:black'><strong>Accesorios de limpieza</strong></h1>
        <?php }else if($categoria == "Despachadores"){ ?>
            <h1 align='center' style='color:black'><strong>Despachadores y jaboneras</strong></h1>
        <?php }else if($categoria == "Casa"){ ?>
            <h1 align='center' style='color:black'><strong>De la casa</strong></h1>
        <?php } ?>
