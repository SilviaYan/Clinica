<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HealthCare</title>
        <!-- Fonts -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estiloslogin.css">
      <style type="text/css">
              body {
                background: url("<?= base_url(); ?>resource/images/imagenes/portada2.jpg");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                -webkit-background-size:cover;
                background-size:cover; 
                background-attachment: fixed;
            }
      </style>

    </head>
    <body>
   
            <div class="content">
                <div class="title m-b-md">
                    HealthCare
                </div>
                <div class="contenedorform">     
                    <div class="login">
                        <h2>Iniciar Sesion</h2> 
                   <form action="<?php echo base_url(); ?>Login/ingresar" method="post">
                       <input type="text" name="usuario" placeholder="Usuario" required>
                       <input type="password" name="password" placeholder="Contraseña" required="">
                       <input type="submit" value="Iniciar Sesion">
                   </form> 
                    </div>
               <!-- <div class="forgotpass">
                <a href="paginaUsuario.php">Olvide mi Contraseña</a>
                </div>-->
            </div>
            </div>
    <script src="bootstrap4/js/jquery.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>
