<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$servicio = is_numeric($_GET['servicio']) && $_GET['servicio'] <= 5 && $_GET['servicio'] >= 1 ? $_GET['servicio'] : 1;
$servicios = array("no","MARKETING", "PUBLICIDAD", "ARTES GR&Aacute;FICAS", "DESARROLLO WEB","OUTSOURCING");
$cantidadServicios = count($servicios);
$backgroundPositionStyle = 'style="background-position: 0 ';
$backgroundPosition = 0;
?>


<div id="servicios-panel">

    <h2 class="museo-font">
        Nuestro Servicios
    </h2>
    <?php for ($i = 1; $i < $cantidadServicios; $i++): ?>
        <div class="servicios-seccion <?php echo $i == $cantidadServicios-1 ? 'servicios-ultimo-servicio' : '';?>"> 
            
            <a href="#javascript" value="<?php echo $i?>" class="servicios-servicio no-decoration-anchor <?php echo $i == $servicio ? 'servicio-activo' : ''; ?>">
                <span class="servicios-icono" <?php echo $backgroundPositionStyle.$backgroundPosition.'px;"'?>> </span> <span  class="servicios-titulo museo-font <?php echo $i == $servicio ? 'servicio-activo' : ''; ?>"><?php echo $servicios[$i]; ?></span>
            </a>
        </div>
    <?php $backgroundPosition-=82;?>
    <?php endfor; ?>

</div>

<div id="servicios-info" class="museo-font">
    <h2 id="servicios-info-titulo">
        En un mundo competitivo
    </h2>

    <p id="servicios-descripcion">
        <span id="servicios-descripcion-negrita" class="bold"></span>
    </p>
    <h3 id="servicios-puntos-claves-intro"></h3>

    <ul id="servicios-puntos-claves">

    </ul>

<!--    <h3 id="servicios-proyectos-relacionados">Proyectos Relacionados: </h3>-->

</div>
