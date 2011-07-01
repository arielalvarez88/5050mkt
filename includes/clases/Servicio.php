<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio
 *
 * @author ariel
 */
class Servicio {
    
    public $descripcion;
    public $puntosClaves;
    public $screenshots;
    public $puntosClavesIntro;
    public $descripcionCorta;
    public function __construct($descripcion,$puntosClavesIntro,$puntosClaves,$screenshots,$descripcionCorta=null) {
       
        $this->descripcion = $descripcion;
        $this->puntosClavesIntro= $puntosClavesIntro;
        $this->puntosClaves = $puntosClaves;
        $this->screenshots = $screenshots;
        $this->descripcionCorta = $descripcionCorta;
    }
    
    
}

?>
