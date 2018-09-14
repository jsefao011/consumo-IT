<?php

namespace App\Entidad\sysatemInternet;

class Contrato
{
    protected $table = 'contrato';
    protected $primaryKey = 'idCONTRATO';
    protected $fillable = ['Cod_Contrato','Descripcion','Estado','Fech_Emision','Fech_Vencimiento','idEntidad','idProveedor','Img_url','Importe','Num_Recibo','Velocidad_Mb'];

    /**
     * @var int
     */
    private $idCONTRATO;
    /**
     * @var string
     */
    private $Cod_Contrato;
    /**
     * @var string
     */
    private $Descripcion;
    /**
     * @var int
     */
    private $Estado;
    /**
     * @var string
     */
    private $Fech_Emision;
    /**
     * @var string
     */
    private $Fech_Vencimiento;
    /**
     * @var int
     */
    private $idEntidad;
    /**
     * @var int
     */
    private $idProveedor;
    /**
     * @var string
     */
    private $Img_url;
    /**
     * @var double
     */
    private $Importe;
    /**
     * @var double
     */
    private $Num_Recibo;
    /**
     * @var double
     */
    private $Velocidad_Mb;
    /**
     * @var Area[]
     */
    private $areas;
    /**
     * @var Det_contrato[]
     */
    private $detalle;
    /**
     * @var Documento[]
     */
    private $documeto;

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
     * @return string
     */
    public function getCodContrato()
    {
        return $this->Cod_Contrato;
    }

    /**
     * @param string $Cod_Contrato
     */
    public function setCodContrato($Cod_Contrato)
    {
        $this->Cod_Contrato = $Cod_Contrato;
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
     * @return string
     */
    public function getFechEmision()
    {
        return $this->Fech_Emision;
    }

    /**
     * @param string $Fech_Emision
     */
    public function setFechEmision($Fech_Emision)
    {
        $this->Fech_Emision = $Fech_Emision;
    }

    /**
     * @return string
     */
    public function getFechVencimiento()
    {
        return $this->Fech_Vencimiento;
    }

    /**
     * @param string $Fech_Vencimiento
     */
    public function setFechVencimiento($Fech_Vencimiento)
    {
        $this->Fech_Vencimiento = $Fech_Vencimiento;
    }

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
     * @return int
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * @param int $idProveedor
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;
    }

    /**
     * @return string
     */
    public function getImgUrl()
    {
        return $this->Img_url;
    }

    /**
     * @param string $Img_url
     */
    public function setImgUrl($Img_url)
    {
        $this->Img_url = $Img_url;
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
     * @return float
     */
    public function getNumRecibo()
    {
        return $this->Num_Recibo;
    }

    /**
     * @param float $Num_Recibo
     */
    public function setNumRecibo($Num_Recibo)
    {
        $this->Num_Recibo = $Num_Recibo;
    }

    /**
     * @return float
     */
    public function getVelocidadMb()
    {
        return $this->Velocidad_Mb;
    }

    /**
     * @param float $Velocidad_Mb
     */
    public function setVelocidadMb($Velocidad_Mb)
    {
        $this->Velocidad_Mb = $Velocidad_Mb;
    }

    /**
     * @return Area[]
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * @param Area[] $areas
     */
    public function setAreas($areas)
    {
        $this->areas = $areas;
    }

    /**
     * @return Det_contrato[]
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * @param Det_contrato[] $detalle
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    }

    /**
     * @return Documento[]
     */
    public function getDocumeto()
    {
        return $this->documeto;
    }

    /**
     * @param Documento[] $documeto
     */
    public function setDocumeto($documeto)
    {
        $this->documeto = $documeto;
    }


    /**
     * @return Area[]
     */
    public function areas()
    {
        return $this->getAreas();
    }
   /* public function proveedor() {
        return $this->hasOne('App\Proveedor', 'idProveedor');
    }*/
    /**
     * @return Det_contrato[]
     */
    public function detalle() {
        return $this->getDetalle();
    }

    /**
     * @return Documento[]
     */
    public function documento() {
        return $this->getDocumeto();
    }

}
