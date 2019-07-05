<?php include_once('includes/header.php')?>

<section class="container_flex">
    <aside class="a1">
        <div class="menu-vertical">
            <ul>
                <li><a href="Productos/listar.php">Mis Productos</a></li>
                <li><a href="#">Pedidos Realizados</a></li>
                <li><a href="index.php">Reportes</a></li>
                <li><a href="#">Recetas</a></li>
            </ul>
        </div>
    </aside>
    <aside class="a2">
        <div class="buscador">
            <input class="search" type="text" placeholder="Buscar producto">
            <input type="submit" value="Buscar">
        </div>
        <div class="cuerpo-cart">
            <h2>Carrito de venta</h2>
            <div class="detalle">
                <table class="table">
                    <thead class="cabeza">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Helado de Vainilla</td>
                        <td>S/. 2.00</td>
                        <td><input type="number" value="1" class="txt-cantidad"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Frapuccino de Mocca</td>
                        <td>S/. 10.00</td>
                        <td><input type="number" value="1" class="txt-cantidad"></td>
                    </tr>
                    </tbody>

                </table>
            </div>
            <div class="montos">
                <table class="table-cart">
                    <tr>
                        <th scope="row">SubTotal</th>
                        <td>S/.25.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Impuestos</th>
                        <td>S/.00.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Monto Total</th>
                        <td>S/.25.00</td>
                    </tr>
                </table>
            </div>
            <div class="botones">
                <a class="btn-seguir-vendiendo" href="./Productos/listar.php">Seguir vendiendo</a>
                <input type="submit" class="btn-pagar" value="Ir a pagar">
            </div>
        </div>
    </aside>
</section>
</body>
</html>
