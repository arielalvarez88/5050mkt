<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiciosSimpleFactory
 *
 * @author ariel
 */
class ServiciosSimpleFactory {
    private $serviciosClassFiles;
    
    public function __construct()
    {
        $this->serviciosClassFiles = array("InvalidValue","Marketing","Publicidad","ArtesGraficas","DesarrolloWeb","Outsourcing");
    }
    
    function createServiceObject($servicio)
    {
        if(!$servicio)
            return false;
      
        require_once dirname(__FILE__).'/'.$this->serviciosClassFiles[$servicio].'.php';
        $class = $this->serviciosClassFiles[$servicio];
        $a = new $class;
      
        return new $this->serviciosClassFiles[$servicio];
        
            
    }
}

?>
