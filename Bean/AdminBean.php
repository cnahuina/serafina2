<?php

class AdminBean
{
    public $codigo;
    public $usuario;
    public $clave;
    public $codPersona;
    public $codCargo;


    function getCodigo()
    {
        return $this->codigo;
    }

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

     function getUsuario()
    {
        return $this->usuario;
    }

     function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

     function getClave()
    {
        return $this->clave;
    }

     function setClave($clave)
    {
        $this->clave = $clave;
    }

     function getCodPersona()
    {
        return $this->codPersona;
    }

     function setCodPersona($codPersona)
    {
        $this->codPersona = $codPersona;
    }

     function getCodCargo()
    {
        return $this->codCargo;
    }

     function setCodCargo($codCargo)
    {
        $this->codCargo = $codCargo;
    }


}