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

}
header("location:$destino");
?>