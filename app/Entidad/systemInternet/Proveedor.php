<?php

namespace App\Entidad\sysatemInternet;

class Proveedor
{
    protected $table = 'proveedor';
    protected $primaryKey = 'idProveedor';
    protected $fillable = ['Direccion','Nom_Empresa','RUC','Telefono','Url','idUSUARIO'];
    /**
     * @var int
     */
    private $idProveedor;
    /**
     * @var string
     */
    private $Direccion;
    /**
     * @var string
     */
    private $Nom_Empresa;
    /**
     * @var string
     */
    private $RUC;
    /**
     * @var string
     */
    private $Telefono;
    /**
     * @var string
     */
    private $Url;
    /**
     * @var int
     */
    private $idUSUARIO;

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
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param string $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return string
     */
    public function getNomEmpresa()
    {
        return $this->Nom_Empresa;
    }

    /**
     * @param string $Nom_Empresa
     */
    public function setNomEmpresa($Nom_Empresa)
    {
        $this->Nom_Empresa = $Nom_Empresa;
    }

    /**
     * @return string
     */
    public function getRUC()
    {
        return $this->RUC;
    }

    /**
     * @param string $RUC
     */
    public function setRUC($RUC)
    {
        $this->RUC = $RUC;
    }

    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param string $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }

    /**
     * @return int
     */
    public function getIdUSUARIO()
    {
        return $this->idUSUARIO;
    }

    /**
     * @param int $idUSUARIO
     */
    public function setIdUSUARIO($idUSUARIO)
    {
        $this->idUSUARIO = $idUSUARIO;
    }



}
