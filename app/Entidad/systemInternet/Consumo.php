<?php

namespace App\Entidad\sysatemInternet;

class Consumo
{

    protected $table = 'consumo';
    protected $primaryKey = 'idConsumo';
    protected $fillable = ['num_comp;Mbts_Asignado;Porc_Mbts;Costo_Mbps;Fecha;Porc_Acum;SubTotal;Fecha;Estado;idArea'];

    /**
     * @var int
     */
    private $idConsumo;
    /**
     * @var int
     */
    private $num_comp;
    /**
     * @var double
     */
    private $Mbts_Asignado;
    /**
     * @var double
     */
    private $Porc_Mbts;
    /**
     * @var double
     */
    private $Costo_Mbps;
    /**
     * @var string
     */
    private $Fecha;
    /**
     * @var int
     */
    private $Porc_Acum;
    /**
     * @var double
     */
    private $SubTotal;
    /**
     * @var int
     */
    private $Estado;
    /**
     * @var int
     */
    private $idArea;
    /**
     * @var Area
     */
    private $area;

    /**
     * @return int
     */
    public function getIdConsumo()
    {
        return $this->idConsumo;
    }

    /**
     * @param int $idConsumo
     */
    public function setIdConsumo($idConsumo)
    {
        $this->idConsumo = $idConsumo;
    }

    /**
     * @return int
     */
    public function getNumComp()
    {
        return $this->num_comp;
    }

    /**
     * @param int $num_comp
     */
    public function setNumComp($num_comp)
    {
        $this->num_comp = $num_comp;
    }

    /**
     * @return float
     */
    public function getMbtsAsignado()
    {
        return $this->Mbts_Asignado;
    }

    /**
     * @param float $Mbts_Asignado
     */
    public function setMbtsAsignado($Mbts_Asignado)
    {
        $this->Mbts_Asignado = $Mbts_Asignado;
    }

    /**
     * @return float
     */
    public function getPorcMbts()
    {
        return $this->Porc_Mbts;
    }

    /**
     * @param float $Porc_Mbts
     */
    public function setPorcMbts($Porc_Mbts)
    {
        $this->Porc_Mbts = $Porc_Mbts;
    }

    /**
     * @return float
     */
    public function getCostoMbps()
    {
        return $this->Costo_Mbps;
    }

    /**
     * @param float $Costo_Mbps
     */
    public function setCostoMbps($Costo_Mbps)
    {
        $this->Costo_Mbps = $Costo_Mbps;
    }

    /**
     * @return string
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param string $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return int
     */
    public function getPorcAcum()
    {
        return $this->Porc_Acum;
    }

    /**
     * @param int $Porc_Acum
     */
    public function setPorcAcum($Porc_Acum)
    {
        $this->Porc_Acum = $Porc_Acum;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
        return $this->SubTotal;
    }

    /**
     * @param float $SubTotal
     */
    public function setSubTotal($SubTotal)
    {
        $this->SubTotal = $SubTotal;
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
     * @return int
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * @param int $idArea
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }

    /**
     * @return Area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param Area $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return Area
     */
    public function area()
    {
        return $this->getArea();
    }
}
