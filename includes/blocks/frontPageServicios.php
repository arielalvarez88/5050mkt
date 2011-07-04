<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of frontPageServicios
 *
 * @author ariel
 */

require_once dirname(__FILE__).'/../clases/ServiciosSimpleFactory.php';

$servicios = array("no","MARKETING", "PUBLICIDAD", "ARTES GR&Aacute;FICAS", "DESARROLLO WEB");
$cantidadServicios = count($servicios);
$backgroundPositionStyle = 'style="background-position: 0 ';
$backgroundPosition = 0;
$serviciosFactory = new ServiciosSimpleFactory();
?>
<?php for($i=1; $i<$cantidadServicios;  $i++):?>

<div class="front-servicios">
    <div class="front-servicios-icon" <?php echo $backgroundPositionStyle.$backgroundPosition.'px;"';?>>
        
    </div>
    <div class="front-servicios-data">
        <a class="no-decoration-anchor" href="servicios?servicio=<?php echo $i;?>">
        <h3 class="front-servicios-title museo-font">
            <?php echo $servicios[$i];?>
        </h3>
            </a>
        <p class="front-servicios-description museo-font">
            <?php echo $serviciosFactory->createServiceObject($i)->descripcionCorta;?>
        </p>
    </div>
</div>
<?php $backgroundPosition -= 82;?>
<?php endfor;?>
    



