<?php
class job{
    protected $emri;
    protected $pershkrimi;
    protected $foto;
    
    public function __construct($emri, $pershkrimi, $foto){
        $this->emri = $emri;
        $this->pershkrimi = $pershkrimi;
        $this->foto= $foto;
    }

    public function getEmri(){
        return $this->emri;
    }
    public function getPershkrimi(){
        return $this->pershkrimi;
    }
    public function getFoto(){
        return $this->foto;
    }
}