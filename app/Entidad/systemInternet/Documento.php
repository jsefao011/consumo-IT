<?php

namespace App\Entidad\sysatemInternet;

class Documento
{
    protected $table = 'documentos';
    protected $primaryKey = 'idDocumentos';
    protected $fillable = ['DocPrueba','Documento','Fecha','idCONTRATO','TypeDocum','TypePrue',"idUSUARIO","rep_url"];
    protected $hidden = [
        'Documento',
        'Preview',
        'DocPrueba',
        'PreviewSimple',
        'DocumentoSimple'

    ];
    /**
     * @var int
     */
    private $idDocumentos;
    /**
     * @var string
     */
    private $DocPrueba;
    /**
     * @var string
     */
    private $Documento;
    /**
     * @var string
     */
    private $Fecha;
    /**
     * @var int
     */
    private $idCONTRATO;
    /**
     * @var string
     */
    private $TypeDocum;
    /**
     * @var string
     */
    private $TypePrue;
    /**
     * @var int
     */
    private $idUSUARIO;
    /**
     * @var string
     */
    private $rep_url;

    /**
     * @return int
     */
    public function getIdDocumentos()
    {
        return $this->idDocumentos;
    }

    /**
     * @param int $idDocumentos
     */
    public function setIdDocumentos($idDocumentos)
    {
        $this->idDocumentos = $idDocumentos;
    }

    /**
     * @return string
     */
    public function getDocPrueba()
    {
        return $this->DocPrueba;
    }

    /**
     * @param string $DocPrueba
     */
    public function setDocPrueba($DocPrueba)
    {
        $this->DocPrueba = $DocPrueba;
    }

    /**
     * @return string
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * @param string $Documento
     */
    public function setDocumento($Documento)
    {
        $this->Documento = $Documento;
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
    public function getTypeDocum()
    {
        return $this->TypeDocum;
    }

    /**
     * @param string $TypeDocum
     */
    public function setTypeDocum($TypeDocum)
    {
        $this->TypeDocum = $TypeDocum;
    }

    /**
     * @return string
     */
    public function getTypePrue()
    {
        return $this->TypePrue;
    }

    /**
     * @param string $TypePrue
     */
    public function setTypePrue($TypePrue)
    {
        $this->TypePrue = $TypePrue;
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

    /**
     * @return string
     */
    public function getRepUrl()
    {
        return $this->rep_url;
    }

    /**
     * @param string $rep_url
     */
    public function setRepUrl($rep_url)
    {
        $this->rep_url = $rep_url;
    }



}
