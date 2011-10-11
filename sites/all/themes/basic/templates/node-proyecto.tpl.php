<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$next_proyect_path = node_load($node->field_proyecto_siguiente[0]['nid'])->path;

$previous_proyect_path = node_load($node->field_proyecto_anterior[0]['nid'])->path;
$web_page_url = $node->field_proyecto_web_page[0]['url'];


?>

<div id="proyecto-header">
    <h1 class="museo-font">Proyectos Realizados</h1>
    
</div>

<div id="proyecto-body">

    <div id="proyecto-info">
        <h1 class="museo-font bold"><?php echo $node->field_proyecto_nombre_cliente[0]['value']; ?></h1>
        <ul id="proyecto-servicios" class="museo-font">
            <?php if ($node->field_proyecto_desarrollo_web[0]['value']): ?>
                <li class="museo-font bold">Desarrollo Web</li>
            <?php endif; ?>

            <?php if ($node->field_proyecto_marketing[0]['value']): ?>
                <li class="museo-font bold">Marketing</li>
            <?php endif; ?>

            <?php if ($node->field_proyecto_artes_graficas[0]['value']): ?>
                <li class="museo-font bold">Artes Gr&aacute;ficas</li>
            <?php endif; ?>

            <?php if ($node->field_proyecto_publicidad[0]['value']): ?>
                <li class="museo-font bold">Publicidad</li>
            <?php endif; ?>
               
        </ul>
        <?php if ($node->field_proyecto_requerimientos): ?>
        <h3 class="museo-font bold">Descripci&oacute;n del proyecto</h3>
            <p class="museo-font ">
                <?php echo $node->field_proyecto_requerimientos[0]['safe']; ?>
            </p>
        <?php endif; ?>
        
            <?php if($web_page_url):?>
            <a href="<?php echo $web_page_url;?>" class="no-decoration-anchor">Visitar  la p&aacute;gina web</a>
            <?php endif;?>
            
            <div id="proyecto-navegacion">
                
                <a href="<?php echo base_path().$previous_proyect_path;?>"><img alt="previous" id="proyecto-previous" src="<?php echo base_path().file_directory_path().'/images/previousArrow.png'; ?>"></a>
                <a href="<?php echo base_path();?>portafolio"><img alt="portafolio" id="proyecto-portafolio-link" src="<?php echo base_path().file_directory_path().'/images/portafolioSquares.png'; ?>"></a>
                <a href="<?php echo base_path().$next_proyect_path;?>"><img alt="next" id="proyecto-next" src="<?php echo base_path().file_directory_path().'/images/nextArrow.png';?>"></a>
                
                
            </div>
    </div>
    <div id="proyecto-screenshots">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <?php $screenshot_field_name = 'field_proyecto_screenshot' . $i; ?>
            <?php $screenshot_field = $node->$screenshot_field_name; ?>
            <?php if($screenshot_field && $screenshot_field[0]['filepath']):?>
            <p>
                <img src="<?php echo base_path() . $screenshot_field[0]['filepath']; ?>" alt="screenshot" class="proyecto-screenshot" id="proyecto-screenshot<?php echo $i; ?>">
            </p>
            <?php endif;?>
            
        <?php endfor; ?>
            <p>
                <a href="#proyecto-screenshot1" class="no-decoration-anchor">
                    <img alt="go-up" src="<?php echo base_path().file_directory_path()."/images/goUpArrow.png";?>">
                </a> 
            </p>
            
            
             
    </div>


</div>