<?php
session_start();
require_once '../Bean/AdminBean.php';
require_once '../Dao/AdminDAO.php';

header('Content-Type: application/json');
$op=$_REQUEST["op"];
switch ($op){
    case 1:{
        $usuario=$_REQUEST["usuario"];
        $clave=$_REQUEST["clave"];
        $objbean=new adminBean();
        $objcapbean=new adminBean();
        $objdao=new adminDAO();
        $objbean->setUsuario($usuario);
        $objbean->setClave($clave);
        $i=$objdao->Acceso($objbean);
        $estado['estado'] = $i;
        echo json_encode($estado);
        break;
    }
    case 2:{
        $objdao=new adminDAO();
        $lista['ADMIN']=$objdao->ListarUsu();
        echo json_encode($lista);
        break;
    }
}
?>
