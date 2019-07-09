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
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar bg-red">
        <div class="items">
            <div class="title">
                <a class="title" href="http://localhost/SerfinaProject/Pages/inicio.php">Serafina</a>
            </div>
            <div class="icons">
                <div class="cart-circle"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="profile"><a href="../Pages/Admin/ListarUsuario.php"><i class="fas fa-user"></i></a></div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
</header>
    <section class="container_flex">
        <aside class="a1">
            <div class="menu-vertical">
                <ul>
                    <li><a href="Productos/listar.php">Mis Productos</a></li>
                    <li><a href="#">Pedidos Realizados</a></li>
                    <li><a href="#">Reportes</a></li>
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
                <h2>Productos más vendidos</h2>
                <table class="table">
                    <thead class="cabeza">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $reg) {?>
                        <tr>
                            <th scope="row"><?php echo  $reg['descripcion']; ?></th>
                            <td><?php echo  $reg['descripcion']; ?></td>
                            <td><?php echo  $reg['descripcion']; ?></td>
                        </tr>
                    <?php }?>
                    </tbody>

                </table>

                <div style="background-color: #ffffff" >
                    <canvas id="myChart" width="600" height="300"></canvas>
                </div>

                <script>
                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Helado de Fresa', 'Conitos', 'Paletas', 'Frapuccino', 'Cafe', 'Ensalada de frutas'],
                            datasets: [{
                                label: '# Consumo semanal',
                                data: [12, 19, 11, 12, 10, 14],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </aside>
    </section>
</body>
</html>