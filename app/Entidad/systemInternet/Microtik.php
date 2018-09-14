<?php

namespace App\Entidad\sysatemInternet;

class Microtik
{
    protected $table = 'microtik';
    protected $primaryKey = 'idMicrotik';
    protected $fillable = ['AREA_idSECTOR','Baja','Fecha','Subida'];
    /**
     * @var int
     */
    private $idMicrotik;
    /**
     * @var int
     */
    private $AREA_idSECTOR;
    /**
     * @var string
     */
    private $Baja;
    /**
     * @var int
     */
    private $Fecha;
    /**
     * @var double
     */
    private $Subida;

    /**
     * @return int
     */
    public function getIdMicrotik()
    {
        return $this->idMicrotik;
    }

    /**
     * @param int $idMicrotik
     */
    public function setIdMicrotik($idMicrotik)
    {
        $this->idMicrotik = $idMicrotik;
    }

    /**
     * @return int
     */
    public function getAREAIdSECTOR()
    {
        return $this->AREA_idSECTOR;
    }

    /**
     * @param int $AREA_idSECTOR
     */
    public function setAREAIdSECTOR($AREA_idSECTOR)
    {
        $this->AREA_idSECTOR = $AREA_idSECTOR;
    }

    /**
     * @return string
     */
    public function getBaja()
    {
        return $this->Baja;
    }

    /**
     * @param string $Baja
     */
    public function setBaja($Baja)
    {
        $this->Baja = $Baja;
    }

    /**
     * @return int
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param int $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return float
     */
    public function getSubida()
    {
        return $this->Subida;
    }

    /**
     * @param float $Subida
     */
    public function setSubida($Subida)
    {
        $this->Subida = $Subida;
    }


}
