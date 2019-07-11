<?php
require_once '../Bean/AdminBean.php';
require_once '../util/ConexionBD.php';

class AdminDAO{
    public function Acceso(AdminBean $objbean){
        $i=0;
        try {
            $usuario=$objbean->getUsuario();
            $clave=$objbean->getClave();


            $sql="select * from usuario where usuario='$usuario' and clave='$clave'";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            $lista=array();
            while($fila= mysqli_fetch_assoc($rs)){
                $lista[] = $fila;
            }
            if(count($lista)==1){
                $i=1;
            }

        } catch (Exception $ex) {
            $i=0;
        }
        return $i;
    }
    public function DatosAdmin(AdminBean $objbean){
        
        try {
            $usuario=$objbean->getUsuario();
            $clave=$objbean->getClave();
            $sql="select * from usuario where usuario='$usuario' and clave='$clave'";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs= $mysqli->query($sql);
            if($fila= mysqli_fetch_assoc($rs)){
                $objbea=new AdminBean();
                $objbea->setIdUsuario($fila['id_usuario']);
                $objbea->setNombres($fila['nombres']);
                $objbea->setUsuario($fila['usuario']);
                $objbea->setClave($fila['clave']);
            }
        } catch (Exception $ex) {
            
        }
        return $objbea;
    }


    public function GrabarAdmin(AdminBean $objbean){
        $i=0;
        try {
            $id=$objbean->getIdUsuario();
            $nombres=$objbean->getNombres();
            $usuario=$objbean->getUsuario();
            $clave=$objbean->getClave();
            $rep_clave=$objbean->getRepClave();
            $sql="insert into usuario(nombres,usuario,clave,rep_clave,estado) values('$nombres','$usuario','$clave','$rep_clave','1')";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            mysqli_close($cn);
            
        } catch (Exception $ex) {
            $rs=0;
        }
        return $rs;
    }
    public function ListarAdmin(){
        try {
            $sql="select * from usuario;";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            $lista=array();
            while ($fila= mysqli_fetch_assoc($rs)){
                $lista[]=$fila;
            }
            mysqli_close($cn);
            
        } catch (Exception $ex) {
            
        }
        return $lista;
    }
    
    public function CapturarAdmin(AdminBean $objbean){
        
        try {
            $id=$objbean->getUsuario();
            $sql="select * from usuario where codigo='$id'";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            if($fila= mysqli_fetch_assoc($rs)){
                $objbe=new AdminBean();
                $objbe->setCodigo($fila['codigo']);
                $objbe->setCodPersona($fila['codigoPersona']);
                $objbe->setUsuario($fila['usuario']);
                $objbe->setClave($fila['clave']);
            }
            mysqli_close($cn);
        } catch (Exception $ex) {
            
        }
        return $objbe;
    }
    public function ModificarAdmin(AdminBean $objbean){
        $i=0;
        try {
            $id=$objbean->getCodigo();
            $codPersona=$objbean->getCodPersona();
            $usuario=$objbean->getUsuario();
            $clave=$objbean->getClave();
            $codCargo=$objbean->getCodCargo();
            $sql="update usuario set codPersona='$codPersona', usuario='$usuario', clave='$clave' where codigo='$id'";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            mysqli_close($cn);
            
        } catch (Exception $ex) {
            $rs=0;
        }
        return $rs;
    }

    public function EliminarAdmin(AdminBean $objbean){
        $i=0;
        try {
            $id=$objbean->getCodigo();
            $sql="delete from usuario where codigo='$id';";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            mysqli_close($cn);
        } catch (Exception $ex) {
            $rs=0;
        }
        return $rs;
    }
}
