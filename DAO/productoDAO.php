<?php

include_once ('../Bean/productoBean.php');
include_once ('../util/ConexionBD.php');

class productoDAO
{

    public function registraProducto(productoBean $objbean)
    {
        $i = 0;
        try {


            $descripcion = $objbean->getDescripcion();
            $presentacion = $objbean->getPresentacion();
            $foto = $objbean->getImagen();
            $precio = $objbean->getPrecio();

            $sql = "insert into productos(descripcion, presentacion, foto, estado,precio,id_receta) values ('$descripcion','$presentacion','$foto',1,'$precio',1)";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();
            $rs = $mysqli->query($sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $rs = 0;
        }
        return $rs;
    }

    public function  ListarProducto(){
        try {
            $sql="select * from productos";

            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();

            $rs= $mysqli->query($sql);
            $lista=array();


            while ($fila= mysqli_fetch_assoc($rs)){
                $lista[]=$fila;
            }

        } catch (Exception $ex) {

        }
        return $lista;
    }
    public function detalle_producto(productoBean $objbean)
    {
        try {

            $id = $objbean->getIdProducto();
            $sql = "select p.descripcion,r.descripcion , p.imagen , p.precio, p.estado FROM producto p , receta r where p.cod_Receta=r.cod_Receta and l.Admin_idadmin='$id'";
            $cn = ConexionBD::getInstance();
            $mysqli = $cn->getConnection();

            $rs= $mysqli->query($sql);
            $fila = array();
            while ($fila = mysqli_fetch_assoc($rs)) {
                $lista[] = $fila;

            }

        } catch (Exception $exc) {

        }
        return $lista;
    }
}