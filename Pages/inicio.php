<?php include_once('includes/header.php')?>

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
                        <tr>
                            <th scope="row">1</th>
                            <td>Helado de Vainilla</td>
                            <td>S/. 2.00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Frapuccino de Mocca</td>
                            <td>S/. 10.00</td>
                        </tr>
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