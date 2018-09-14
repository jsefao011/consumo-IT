<?php

namespace App\Entidad\sysatemInternet;

class Dispositivo
{
    protected $table = 'dispositivo';
    protected $primaryKey = 'idDispositivo';
    protected $fillable = ['Ip','Nombre','Password','Puerto','User','Estado'];

    /**
     * @var int
     */
    private $idDispositivo;
    /**
     * @var string
     */
    private $Ip;
    /**
     * @var string
     */
    private $Nombre;
    /**
     * @var string
     */
    private $Password;
    /**
     * @var int
     */
    private $Puerto;
    /**
     * @var string
     */
    private $User;
    /**
     * @var int
     */
    private $Estado;

    /**
     * @return int
     */
    public function getIdDispositivo()
    {
        return $this->idDispositivo;
    }

    /**
     * @param int $idDispositivo
     */
    public function setIdDispositivo($idDispositivo)
    {
        $this->idDispositivo = $idDispositivo;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->Ip;
    }

    /**
     * @param string $Ip
     */
    public function setIp($Ip)
    {
        $this->Ip = $Ip;
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
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return int
     */
    public function getPuerto()
    {
        return $this->Puerto;
    }

    /**
     * @param int $Puerto
     */
    public function setPuerto($Puerto)
    {
        $this->Puerto = $Puerto;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param string $User
     */
    public function setUser($User)
    {
        $this->User = $User;
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




}
