<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Heladerias Serafina</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script src="js/ajax.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
  
        <div id="container" class="">
            <section>
                 <div id="title" class="container_title">
                     <h1>Heladerias<br> Serafina</h1>
                </div>
                <div id="login" class="container_login">
                    <form class="form" name="form">
                        <h2 class="login-text">Iniciar Sesión</h2>
                        <div class="campos">
                            <input type="text" placeholder="Usuario" id="txtUser" name="usuario"  /><br>
                            <input type="password" id="txtClave" name="clave" /><br>
                            <input type="submit" class="btn-login" value="Ingresar" name="btnEntrar" onclick="Acceso('Controlador')">
                        </div>

                    </form>
                </div>
                
            </section>
        </div>
    </body>
</html>
