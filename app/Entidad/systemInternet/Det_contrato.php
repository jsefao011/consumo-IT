<?php

namespace App\Entidad\sysatemInternet;

class Det_contrato
{
    protected $table = 'det_contrato';
    protected $primaryKey = 'idDET_CONTRATO';
    protected $fillable = ['CD_Req','idCONTRATO','Importe','Oficina','Servicio','Velocidad'];

    /**
     * @var int
     */
    private $idDET_CONTRATO;
    /**
     * @var string
     */
    private $CD_Req;
    /**
     * @var int
     */
    private $idCONTRATO;
    /**
     * @var double
     */
    private $Importe;
    /**
     * @var string
     */
    private $Oficina;
    /**
     * @var string
     */
    private $Servicio;
    /**
     * @var double
     */
    private $Velocidad;

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param string $primaryKey
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;
    }

    /**
     * @return array
     */
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * @param array $fillable
     */
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;
    }

    /**
     * @return int
     */
    public function getIdDETCONTRATO()
    {
        return $this->idDET_CONTRATO;
    }

    /**
     * @param int $idDET_CONTRATO
     */
    public function setIdDETCONTRATO($idDET_CONTRATO)
    {
        $this->idDET_CONTRATO = $idDET_CONTRATO;
    }

    /**
     * @return string
     */
    public function getCDReq()
    {
        return $this->CD_Req;
    }

    /**
     * @param string $CD_Req
     */
    public function setCDReq($CD_Req)
    {
        $this->CD_Req = $CD_Req;
    }

    /**
     * @return int
     */
    public function getIdCONTRATO()
    {
        return $this->idCONTRATO;
    }

    /**
     * @param int $idCONTRATO
     */
    public function setIdCONTRATO($idCONTRATO)
    {
        $this->idCONTRATO = $idCONTRATO;
    }

    /**
     * @return float
     */
    public function getImporte()
    {
        return $this->Importe;
    }

    /**
     * @param float $Importe
     */
    public function setImporte($Importe)
    {
        $this->Importe = $Importe;
    }

    /**
     * @return string
     */
    public function getOficina()
    {
        return $this->Oficina;
    }

    /**
     * @param string $Oficina
     */
    public function setOficina($Oficina)
    {
        $this->Oficina = $Oficina;
    }

    /**
     * @return string
     */
    public function getServicio()
    {
        return $this->Servicio;
    }

    /**
     * @param string $Servicio
     */
    public function setServicio($Servicio)
    {
        $this->Servicio = $Servicio;
    }

    /**
     * @return float
     */
    public function getVelocidad()
    {
        return $this->Velocidad;
    }

    /**
     * @param float $Velocidad
     */
    public function setVelocidad($Velocidad)
    {
        $this->Velocidad = $Velocidad;
    }



}
