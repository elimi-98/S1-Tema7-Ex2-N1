<?php

class CalcularNotas{
    private $qualificacion;

    function __construct($qualificacion){
        $this->qualificacion = $qualificacion;
    }

    function getQualificacion(){
        return $this->qualificacion;
    }


    function grauEstudiant($nota){
        $nota = $this -> qualificacion; 
    
        switch ($nota){
            case $nota >= 60;
                return 'Primera Divisió';
            case $nota >= 45 && $nota <= 59;
                return 'Segona Divisió'; 
            case $nota >= 33 && $nota <= 45;
                return 'Tercera Divisió'; 
            case $nota < 33; 
                return 'Lalumne ha de reprovar'; 
        }
    }

}
?>