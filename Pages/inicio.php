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
            </div>
        </aside>
    </section>
</body>
</html>