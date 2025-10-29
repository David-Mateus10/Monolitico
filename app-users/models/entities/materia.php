<?php
class Materia {
    private $codigo; private $nombre; private $programa;
    public function __construct($codigo=null,$nombre=null,$programa=null){ $this->codigo=$codigo; $this->nombre=$nombre; $this->programa=$programa; }
    public function getCodigo(){return $this->codigo;}
    public function getNombre(){return $this->nombre;}
    public function getPrograma(){return $this->programa;}
    public function setNombre($n){$this->nombre=$n;}
}
