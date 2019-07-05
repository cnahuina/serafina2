<?php
    session_start();
   // $_SESSION['lista'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heladerias Serafina</title>
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
<body>
<header>
    <nav class="navbar bg-red">
        <div class="items">
            <div class="title">
                <a class="title" href="http://localhost/serafina/Pages/inicio.php">Serafina</a>
            </div>
            <div class="icons">
                <div class="cart-circle"><a href="../cart.php"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="profile"><a href="../../Pages/Admin/ListarUsuario.php"><i class="fas fa-user"></i></a></div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
</header>



<!-- Button to Open the Modal -->
<section class="container_flex">
    <aside class="a1">
        <div class="menu-vertical">
            <ul>
                <li><a href="listar.php">Mis Productos</a></li>
                <li><a href="#">Pedidos Realizados</a></li>
                <li><a href="#">Reportes</a></li>
                <li><a href="#">Recetas</a></li>
            </ul>
        </div>
    </aside>


    <aside class="a2">
        <div class="buscador">
            <h2>Registro de Insumo</h2>
            <h4>Codigo</h4><input type="text" id="txtCodigoIns" name="codigo" /><br>
            <h4>Nombre</h4><input type="text" id="txtNombreIns" name="nombre" /><br>
            <h4>Descripcion</h4><input type="text" id="txtDescripcionIns" name="descripcion" /><br>
            <h4>Cantidad</h4><input type="text" id="txtCantidadIns" name="cantidad" /><br>
            <h4>Presentación</h4><input type="text" id="txtPresentacionIns" name="presentacion" /><br>
            <h4>Estado</h4><input type="text" id="txtEstadoIns" name="estado" /><br><br>
            <input type="submit" value="Registrar">
        </div>
    </aside>
</section>