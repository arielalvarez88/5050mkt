<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="servicios">
    <div class="servicios-icon">
        <?php echo $node->field_service_icon[0]['view'];?>
    </div>
    <div class="servicios-data">
        <h3 class="servicios-title museo-font">
            <?php echo $node->field_service_title[0]['safe'];?>
        </h3>
        <p class="servicios-description museo-font">
            <?php echo $node->field_service_description[0]['safe'];?>
        </p>
    </div>
</div>
    
    
