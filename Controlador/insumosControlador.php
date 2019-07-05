<?php session_start();

require_once '../Bean/insumoBean.php';
require_once '../DAO/insumosDAO.php';

$op=$_REQUEST["op"];
switch ($op){
    case 1:{
        unset($_SESSION['mensaje']);
        $objdao=new insumosDAO();
        $lista=$objdao->ListarInsumo();
        $_SESSION['lista']=$lista;
        $destino="../Insumo/ListarInsumo.php";
        break;
    }
    case 2:{
        unset($_SESSION['mensaje']);
        $objInsumo = new insumoBean();
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $cantidad = $_REQUEST['cantidad'];
        $presentacion = $_REQUEST['presentacion'];
        $estado = $_REQUEST['estado'];
        
        $objInsumo.setNombre($nombre);
        $objInsumo.setDescripcion($descripcion);
        $objInsumo.setCantidad($cantidad);
        $objInsumo.setPresentacion($presentacion);
        $objInsumo.setEstado($estado);
    }

}

header("location:$destino");
?>