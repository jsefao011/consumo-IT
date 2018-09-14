<?php

namespace App\Entidad\sysatemInternet;
class Area_has_Contrato
{
    protected $table = 'area_has_contrato';
    protected $primaryKey = 'idAREA_HAS_CONTRATO';
    public $fillable = ['idCONTRATO','idAREA'];
    /**
     * @var int
     */
    private $idAREA_HAS_CONTRATO;
    /**
     * @var int
     */
    private $idCONTRATO;
    /**
     * @var int
     */
    private $idAREA;

    /**
     * @return int
     */
    public function getIdAREAHASCONTRATO()
    {
        return $this->idAREA_HAS_CONTRATO;
    }

    /**
     * @param int $idAREA_HAS_CONTRATO
     */
    public function setIdAREAHASCONTRATO($idAREA_HAS_CONTRATO)
    {
        $this->idAREA_HAS_CONTRATO = $idAREA_HAS_CONTRATO;
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




}
