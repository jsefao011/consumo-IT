<?php

namespace App\Entidad\sysatemInternet;
class Area
{
    protected $table = 'area';
    protected $primaryKey = 'idAREA';
    protected $fillable = ['Cod_Padre','CTAS_CTR',"IdEntidad","CTAS_CTR","Dependencia","Obs","CTW","Interface","Nivel","Nom_Area","idDispositivo"];
    /**
     * @var int
     */
    private $idAREA;
    /**
     * @var string
     */
    private $CTAS_CTR;
    /**
     * @var int
     */
    private $IdEntidad;
    /**
     * @var string
     */
    private $Dependencia;
    /**
     * @var string
     */
    private $Obs;
    /**
     * @var string
     */
    private $CTW;
    /**
     * @var string
     */
    private $Interface;
    /**
     * @var string
     */
    private $Nivel;
    /**
     * @var string
     */
    private $Nom_Area;
    /**
     * @var string
     */
    private $idDispositivo;
    /**
     * @var Area[]
     */
    private $area;
    /**
     * @var Consumo
     */
    private $consumo;

    /**
     * @var Microtik[]
     */
    private $microtik;

    /**
     * @return int
     */
    public function getIdAREA()
    {
        return $this->idAREA;
    }

    /**
     * @param int $idAREA
     */
    public function setIdAREA($idAREA)
    {
        $this->idAREA = $idAREA;
    }

    /**
     * @return string
     */
    public function getCTASCTR()
    {
        return $this->CTAS_CTR;
    }

    /**
     * @param string $CTAS_CTR
     */
    public function setCTASCTR($CTAS_CTR)
    {
        $this->CTAS_CTR = $CTAS_CTR;
    }

    /**
     * @return int
     */
    public function getIdEntidad()
    {
        return $this->IdEntidad;
    }

    /**
     * @param int $IdEntidad
     */
    public function setIdEntidad($IdEntidad)
    {
        $this->IdEntidad = $IdEntidad;
    }

    /**
     * @return string
     */
    public function getDependencia()
    {
        return $this->Dependencia;
    }

    /**
     * @param string $Dependencia
     */
    public function setDependencia($Dependencia)
    {
        $this->Dependencia = $Dependencia;
    }

    /**
     * @return string
     */
    public function getObs()
    {
        return $this->Obs;
    }

    /**
     * @param string $Obs
     */
    public function setObs($Obs)
    {
        $this->Obs = $Obs;
    }

    /**
     * @return string
     */
    public function getCTW()
    {
        return $this->CTW;
    }

    /**
     * @param string $CTW
     */
    public function setCTW($CTW)
    {
        $this->CTW = $CTW;
    }

    /**
     * @return string
     */
    public function getInterface()
    {
        return $this->Interface;
    }

    /**
     * @param string $Interface
     */
    public function setInterface($Interface)
    {
        $this->Interface = $Interface;
    }

    /**
     * @return string
     */
    public function getNivel()
    {
        return $this->Nivel;
    }

    /**
     * @param string $Nivel
     */
    public function setNivel($Nivel)
    {
        $this->Nivel = $Nivel;
    }

    /**
     * @return string
     */
    public function getNomArea()
    {
        return $this->Nom_Area;
    }

    /**
     * @param string $Nom_Area
     */
    public function setNomArea($Nom_Area)
    {
        $this->Nom_Area = $Nom_Area;
    }

    /**
     * @return string
     */
    public function getIdDispositivo()
    {
        return $this->idDispositivo;
    }

    /**
     * @param string $idDispositivo
     */
    public function setIdDispositivo($idDispositivo)
    {
        $this->idDispositivo = $idDispositivo;
    }


    /**
     * @return Area[]
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param Area[] $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return Consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * @param Consumo $consumo
     */
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;
    }

    /**
     * @return Microtik[]
     */
    public function getMicrotik()
    {
        return $this->microtik;
    }

    /**
     * @param Microtik[] $microtik
     */
    public function setMicrotik($microtik)
    {
        $this->microtik = $microtik;
    }


    // Relación

    /**
     * @return Area[]
     */
    public function area()
    {
        return $this->getArea();
    }

    /**
     * @return Consumo
     */
    public function consumo()
    {
        return $this->getConsumo();
    }

    /**
     * @return Microtik[]
     */
    public function microtik()
    {
        return $this->getMicrotik();
    }
}
