<?php
session_start();
$id = $_SESSION['id'];
$list = $_SESSION['lista_u'];


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
    <script src="../../js/ajax.js"></script>

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
                <a class="title" href="../../Pages/inicio.php">Serafina</a>
            </div>
            <div class="icons">
                <div class="cart-circle"><a href="../cart.php"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="profile"><a href="../Admin/ListarUsuario.php"><i class="fas fa-user"></i></a></div>
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
                <li><a href="../Productos/listar.php">Mis Productos</a></li>
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
        <div class="info">
            <h2>Mi perfil</h2>
            <form class="frm_info">
                <div class="form-group-info">
                    <label for="formGroupExampleInput">Nombres y apellidos</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="Carlos Ñahuiña Balbuena" placeholder="Ingresar nombres">

                    <label for="formGroupExampleInput2">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" value="cnahuina@gmail.com" placeholder="Ingresar Email">

                    <label for="formGroupExampleInput2">Usuario</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="cnahuina" placeholder="Ingresar Usuario">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Clave</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" value="2423434sr" placeholder="Ingresar clave" >

                    <label for="formGroupExampleInput2">Repetir Clave</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" value="2423434sr" placeholder="Repetir clave">

                    <div class="botones">
                        <a class="btn-actualizar-datos" href="./ListarUsuario.php" style="margin-top:10% ;color:#fff" >Actualizar datos</a>
                    </div>
                </div>
            </form>
        </div>
        <?php include_once('AgregarNuevo.php')?>
        <div class="cuerpo">
                <h2>Gestión de Trabajadores</h2>
                <table class="table" >
                    <thead class="cabeza">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Usuarios</th>
                        <th scope="col">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $reg2) {?>
                        <tr>
                            <th scope="row"><?php echo  $reg2['id_usuario']; ?></th>
                            <td><?php echo  $reg2['nombres']; ?></td>
                            <td><?php echo  $reg2['usuario']; ?></td>
                            <td>

                                    <a class="btn-seguir-vendiendo" style="color:#fff" data-toggle="modal" data-target="#formNuevo">Editar</a>
                                    <a class="btn-seguir-vendiendo" style="color:#fff" >Eliminar</a>

                            </td>
                        </tr>
                    <?php }?>
                    </tbody>

                </table>

            <div class="botones">
                <a class="btn-seguir-vendiendo" style="color:#fff" data-toggle="modal" data-target="#formNuevo">Nuevo trabajador</a>
            </div>


        </div>


    </aside>
</section>


