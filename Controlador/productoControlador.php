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
        $destino="../Pages/Productos/listar.php";
        break;
    }

}
header("location:$destino");
?>