<?php


class insumoBean
{
    public $idInsumo;
    public $descipcion;
    public $costo;
    public $stock_min;
    public $stock_max;

    /**
     * @return mixed
     */
    public function getIdInsumo()
    {
        return $this->idInsumo;
    }

    /**
     * @param mixed $idInsumo
     */
    public function setIdInsumo($idInsumo)
    {
        $this->idInsumo = $idInsumo;
    }

    /**
     * @return mixed
     */
    public function getDescipcion()
    {
        return $this->descipcion;
    }

    /**
     * @param mixed $descipcion
     */
    public function setDescipcion($descipcion)
    {
        $this->descipcion = $descipcion;
    }

    /**
     * @return mixed
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param mixed $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @return mixed
     */
    public function getStockMin()
    {
        return $this->stock_min;
    }

    /**
     * @param mixed $stock_min
     */
    public function setStockMin($stock_min)
    {
        $this->stock_min = $stock_min;
    }

    /**
     * @return mixed
     */
    public function getStockMax()
    {
        return $this->stock_max;
    }

    /**
     * @param mixed $stock_max
     */
    public function setStockMax($stock_max)
    {
        $this->stock_max = $stock_max;
    }


}