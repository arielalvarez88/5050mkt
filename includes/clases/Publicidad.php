<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publicidad
 *
 * @author ariel
 */
require_once dirname(__FILE__).'/Servicio.php';
class Publicidad extends Servicio{
    //put your code here
    public function __construct() {
          
        $descripcion = "En 5050MKT buscamos la forma de optimizar los resultados de las campañas publicitarias mediante la difusión de información de manera precisa y puntual, al igual que involucrando los medios de comunicación de preferencia más frecuentados por los consumidores.";
        $puntosClavesIntro = "Proponemos maximizar tu pontencial a través de:";
        $puntosClaves= array('Diseño y manejo de campañas publicitarias.','Diseño de comunicación estratégica para anuncios publicitarios.','Planeación, coordinación e implementación en los medios de comunicación.','Asesoría sobre comunicación e imagen corporativa','Asesoría en la organización de actividades.');
        $descripcionCorta = 'Optimiza los resultados de tus estrategias promocionales.';
        $sceenshots = array('primero');
       
        parent::__construct($descripcion, $puntosClavesIntro, $puntosClaves, $screenshots,$descripcionCorta);
    }
}

?>
