<?php


class productoBean
{
    public $idProducto;
    public $descripcion;
    public $presentacion;
    public $idReceta;
    public $imagen;
    public $precio;
    public $estado;

    /**
     * @return mixed
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * @param mixed $presentacion
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;
    }



    /**
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * @param mixed $idProducto
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getIdReceta()
    {
        return $this->idReceta;
    }

    /**
     * @param mixed $idReceta
     */
    public function setIdReceta($idReceta)
    {
        $this->idReceta = $idReceta;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


}