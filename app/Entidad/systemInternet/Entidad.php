<?php

namespace App\Entidad\sysatemInternet;

class Entidad
{
    protected $table = 'entidad';
    protected $primaryKey = 'idEntidad';
    protected $fillable = ['Nombre','C_RUC','Cod_Servicio','Dir_FACT','Descripcion','Estado'];
    /**
     * @var int
     */
    private $idEntidad;
    /**
     * @var string
     */
    private $Nombre;
    /**
     * @var string
     */
    private $C_RUC;
    /**
     * @var string
     */
    private $Cod_Servicio;
    /**
     * @var string
     */
    private $Dir_FACT;
    /**
     * @var string
     */
    private $Descripcion;
    /**
     * @var int
     */
    private $Estado;
    /**
     * @var Contrato[]
     */
    private $contrato;

    /**
     * @return int
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * @param int $idEntidad
     */
    public function setIdEntidad($idEntidad)
    {
        $this->idEntidad = $idEntidad;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return string
     */
    public function getCRUC()
    {
        return $this->C_RUC;
    }

    /**
     * @param string $C_RUC
     */
    public function setCRUC($C_RUC)
    {
        $this->C_RUC = $C_RUC;
    }

    /**
     * @return string
     */
    public function getCodServicio()
    {
        return $this->Cod_Servicio;
    }

    /**
     * @param string $Cod_Servicio
     */
    public function setCodServicio($Cod_Servicio)
    {
        $this->Cod_Servicio = $Cod_Servicio;
    }

    /**
     * @return string
     */
    public function getDirFACT()
    {
        return $this->Dir_FACT;
    }

    /**
     * @param string $Dir_FACT
     */
    public function setDirFACT($Dir_FACT)
    {
        $this->Dir_FACT = $Dir_FACT;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param string $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return int
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param int $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    /**
     * @return Contrato[]
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * @param Contrato[] $contrato
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;
    }

    /**
     * @return Contrato[]
     */
    public function contrato()
    {
        return $this->getContrato();
    }
}
