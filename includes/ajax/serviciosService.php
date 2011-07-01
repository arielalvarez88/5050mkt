<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of serviciosService
 *
 * @author ariel
 */

require_once dirname(__FILE__).'/../clases/ServiciosSimpleFactory.php';

if(!(is_numeric($_POST['servicio']) && $_POST['servicio'] <=5 && $_POST['servicio']>=1))
        return;


$servicio =  $_POST['servicio'];
$serviciosSimpleFactory = new ServiciosSimpleFactory();

echo json_encode($serviciosSimpleFactory->createServiceObject($servicio));


?>
