<?php

include_once ('Bean/insumoBean.php');
include_once ('util/ConexionBD.php');

class insumosDAO
{

    public function registraInsumo(insumoBean $objbean)
    {

        $i = 0;
        try {

            $idInsumo = $objbean->getIdInsumo();
            $descripcion = $objbean->getDescipcion();
            $costo = $objbean->getCosto();
            $stock_min = $objbean->getStockMin();
            $stock_max = $objbean->getStockMax();

            $sql = "insert into insumo(idInsumo, descripcion, costo, stock_min, stock_max)
             values ('$idInsumo','$descripcion','$costo','$stock_min','$stock_max')";
            $cn = ConexionBD::getInstance();
            $i = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $exc) {
            $i = 0;
        }
        return $i;
    }
    public function ListarInsumo(){
        try {
            $sql="select * from insumo;";
            $cn=ConexionBD::getInstance();
            $rs= mysqli_query($cn, $sql);
            $lista=array();
            while ($fila= mysqli_fetch_assoc($rs)){
                $lista[]=$fila;
            }
            mysqli_close($cn);

        } catch (Exception $ex) {

        }
        return $lista;
    }
    public function detalle_insumo(insumoBean $objbean)
    {
        try {

            $id = $objbean->getIdInsumo();
            $sql = "select descripcion, costo, stock_min, stock_max FROM insumo where idInsumo='$id'";
            $objc = new ConexionBD();
            $cn = $objc->getConexionBD();
            $rs = mysqli_query($cn, $sql);
            $fila = array();
            while ($fila = mysqli_fetch_assoc($rs)) {
                $lista[] = $fila;

            }
            mysqli_close($cn);
        } catch (Exception $exc) {

        }
        return $lista;
    }
}