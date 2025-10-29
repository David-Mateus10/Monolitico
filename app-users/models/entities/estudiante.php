<?php
class Estudiante {
    private $codigo;
    private $nombre;
    private $email;
    private $programa;
    public function __construct($codigo=null,$nombre=null,$email=null,$programa=null){
        $this->codigo=$codigo; $this->nombre=$nombre; $this->email=$email; $this->programa=$programa;
    }
    public function getCodigo(){return $this->codigo;}
    public function getNombre(){return $this->nombre;}
    public function getEmail(){return $this->email;}
    public function getPrograma(){return $this->programa;}
    public function setNombre($n){$this->nombre=$n;}
    public function setEmail($e){$this->email=$e;}
    public function setPrograma($p){$this->programa=$p;}
}
