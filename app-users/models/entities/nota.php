<?php
class Nota {
    private $id; private $materia; private $estudiante; private $actividad; private $nota;
    public function __construct($id=null,$materia=null,$estudiante=null,$actividad=null,$nota=null){
        $this->id=$id; $this->materia=$materia; $this->estudiante=$estudiante; $this->actividad=$actividad; $this->nota=$nota;
    }
    public function getId(){return $this->id;}
    public function getMateria(){return $this->materia;}
    public function getEstudiante(){return $this->estudiante;}
    public function getActividad(){return $this->actividad;}
    public function getNota(){return $this->nota;}
    public function setNota($n){$this->nota=$n;}
}
