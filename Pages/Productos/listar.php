<?php
    session_start();
    $id = $_SESSION['id'];
    $list = $_SESSION['lista'];
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
                <a class="title" href="http://localhost/SerfinaProject/Pages/inicio.php">Serafina</a>
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

<?php include_once('popup.php')?>

<!-- Button to Open the Modal -->
<section class="container_flex">
    <aside class="a1">
        <div class="menu-vertical">
            <ul>
                <li><a href="listar.php">Mis Productos</a></li>
                <li><a href="#">Pedidos Realizados</a></li>
                <li><a href="../inicio.php">Reportes</a></li>
                <li><a href="#">Recetas</a></li>
            </ul>
        </div>
    </aside>


    <aside class="a2">
        <div class="buscador">
            <input class="search" type="text" placeholder="Buscar producto">
            <input type="submit" value="Buscar">
        </div>


        <div class="cuerpo">
            <?php foreach ($list as $reg) {?>
            <div class="card">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <img src="../../assets/images/<?php echo $reg['foto']?>"  width="200" height="200" alt="">
                <div class="circle"><i class="fas fa-shopping-cart"></i></div></a>
            </div>
            <?php  }?>
        </div>


    </aside>
</section>


