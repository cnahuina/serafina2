<?php session_start();

require_once '../Bean/productoBean.php';
require_once '../DAO/productoDAO.php';

$op=$_REQUEST["op"];
switch ($op){
    case 1:{
        unset($_SESSION['mensaje']);
        $objdao=new productoDAO();
        $lista=$objdao->ListarProducto();
        $_SESSION['lista']=$lista;
        $destino="../Pages/inicio.php";
        break;
    }
    case 2: {
        unset($_SESSION['mensaje']);
        $objbean = new productoBean();
        $objDao = new productoDAO();

        $nombre = $_REQUEST['descripcion'];
        $presentacion = $_REQUEST['presentacion'];
        $precio = $_REQUEST['precio'];

        $foto = addslashes(file_get_contents($_FILES['foto'] ['tmp_name']));

        $objbean->setDescripcion($nombre);
        $objbean->setPresentacion($presentacion);
        $objbean->setPrecio($precio);
        $objbean->setImagen($foto);
        $i = $objDao->registraProducto($objbean);


        if ($i == 1) {
            $mensaje = "Datos Agregados Satisfactoriamente";
        } else {
            $mensaje = "Datos no Agregados";
        }
        $_SESSION['mensaje'] = $mensaje;
        $destino = "../Pages/Productos/listar.php";
        break;
    }

}
header("location:$destino");
?>