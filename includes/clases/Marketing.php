<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Marketing
 *
 * @author ariel
 */

require_once dirname(__FILE__).'/Servicio.php';
class Marketing extends Servicio{
    //put your code here
    public function __construct() {
          
        $descripcion = "Captar, convencer y conservar la atención del público se ha convertido en una tarea difícil para las empresas en la actualidad. Nuestro equipo le ayudará a definir y segmentar su mercado meta, para lograr ofrecerles una propuesta de valor por la cual se interesen en sus productos o servicios.";
        $puntosClavesIntro = "Podemos ayudarte con:";
        $puntosClaves= array('Diseño de planes y estrategias de mercadeo.','Implementación de planes, programas y actividades de mercadeo.','Asesoría en la planeación de los procesos de mercadeo en nuevas empresas.');
        $sceenshots = array('primero');
        $descripcionCorta = 'Descubre las acciones más efectivas para lograr conocer el mercado meta.';
       
        parent::__construct($descripcion, $puntosClavesIntro, $puntosClaves, $screenshots,$descripcionCorta);
    }
}

?>
