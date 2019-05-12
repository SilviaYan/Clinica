<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HealthCare</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estiloslogin.css">
        <!-- Styles -->
        <!--<style type="text/css">
           @import '../css/estiloslogin.css';
        </style>-->
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    HealthCare
                </div>
            <!--    <div class="header">
            <h1><img src="imagenes/logo.png"></h1>
            </div>-->
                <div class="contenedorform">     
                    <div class="login">
                        <h2>Iniciar Sesion</h2> 
                   <form action="paginaAdmin.php" method="post">
                       <input type="text" name="" placeholder="Usuario" required>
                       <input type="password" name="" placeholder="Contraseña" required="">
                       <input type="submit" value="Iniciar Sesion">
                   </form> 
                    </div>
                <div class="forgotpass">
                <a href="paginaUsuario.php">Olvide mi Contraseña</a>
                </div>
            </div>
            </div>
    </body>
</html>
