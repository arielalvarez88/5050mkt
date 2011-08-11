<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtesGraficas
 *
 * @author ariel
 */
require_once dirname(__FILE__).'/Servicio.php';
class ArtesGraficas extends Servicio{
    //put your code here
    public function __construct() {
          
        $descripcion = "Disponemos del conocimiento y los recursos necesarios para que los consumidores tengan una experiencia visual agradable con la imagen de tu empresa. Tanto la identidad corporativa como los recursos de comunicación que debe proyectar su entidad, representan una oportunidad de atraer a consumidores potenciales.";
         $puntosClavesIntro = "Podemos ayudarte con:";
        $puntosClaves= array('Diseño de material publicitario y promocional.','Multimedia.','Diseño, creación y producción de material audiovisual.','Impresión de todo tipo de material publicitario.');
        $descricionCorta = 'Comunicación atractiva para todo tipo de público.';
        $sceenshots = array('primero');
       
        parent::__construct($descripcion, $puntosClavesIntro, $puntosClaves, $screenshots,$descricionCorta);
    }
}
?>
