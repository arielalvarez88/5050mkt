<?php
require_once dirname(__FILE__) . "/../repositories/DrupalRepository.php";
require_once dirname(__FILE__) . "/../paths.php";

$drupalRepository = new DrupalRepository();
$db_instace = $drupalRepository->getResource();
$query = "SELECT * from (select ct.field_proyecto_descripcion_value as descripcion, ct.field_proyecto_artes_graficas_value as artes_graficas, ct.field_proyecto_desarrollo_web_value as desarrollo_web, ct.field_proyecto_publicidad_value as publicidad, ct.field_proyecto_marketing_value as marketing, f.filepath as screenshot, ct.field_proyecto_nombre_cliente_value as client_name, ct.field_logo_cliente_fid as logo_id  from content_type_proyecto ct INNER JOIN files f on ct.field_proyecto_screenshot_fid  = f.fid) a INNER JOIN (select f.filepath as logo, ct.field_logo_cliente_fid as logo_id from content_type_proyecto ct INNER JOIN files f on ct.field_logo_cliente_fid = f.fid) b on a.logo_id = b.logo_id";
$results = db_query($query);
$projects = array();


while ($project = db_fetch_object($results)) {
    $projects[] = $project;
}
?>

<?php if ($projects): ?>
    <div id="ultimos-proyectos">

        <div id="ultimos-proyectos-header">
            <h1 class="museo-font">
                Proyectos Recientes
            </h1>
            <p id="" class="museo-font">Aqu&iacute; te presentamos algunas muestras de esfuerzo dedicación y compromiso con nuestros proyectos.</p>
        </div>

        <div class="ultimos-proyectos-screenshot">
            <div id="ultimos-proyectos-images-container">
                <?php for ($i = 1; $i <= count($projects); $i++): ?>

                    <img width="326" height="155" class="screenshots-ultimos-proyectos <?php echo $i == 1 ? '' : 'hidden' ?>" id="screenshots-ultimos-proyectos<?php echo $i; ?>" alt="screenshot del proyecto" src="<?php echo $paths->root;?>/<?php echo $projects[$i - 1]->screenshot; ?>">
                <?php endfor; ?>
            </div>

            <div id="ultimos-proyectos-selectors-container">
                <?php for ($i = 1; $i <= count($projects); $i++): ?>

                <span id="ultimos-proyectos-selector<?php echo $i; ?>" class="ultimos-proyectos-selector <?php echo $i == 1 ? 'slide-show-selector-on' : 'slide-show-selector-off' ?>"></span>

                <?php endfor; ?>

            </div>
            


        </div>
        <div class="ultimos-proyectos-data">
            
     
            
            
            
            <p class="ultimos-proyectos-descripcion-container museo-font">
                <img class="comilla-inicio" alt="comilla-inicio" src="<?php echo $paths->images;?>/comillaInicio.png">
                 <?php for ($i = 1; $i <= count($projects); $i++): ?>
                <span class="ultimos-proyectos-descripcion <?php echo $i == 1 ? '' : 'hidden' ?>" id="ultimos-proyectos-descripcion<?php echo $i;?>"><?php echo $projects[$i-1]->descripcion?></span>
                <?php endfor;?>
                <img class="comilla-final" alt="comilla final" src="<?php echo $paths->images;?>/comillaFinal.png">
            </p>
            <div id="comilla-final-container">
                
            </div>
            
            
    
            <?php for ($i = 1; $i <= count($projects); $i++): ?>
                <p class="ultimos-proyectos-nombre-logo">
                    <img  class="logo-ultimos-proyectos <?php echo $i == 1 ? '' : 'hidden' ?>" id="logo-ultimos-proyectos<?php echo $i; ?>" alt="logo del cliente" src="<?php echo $paths->root ;?>/<?php echo $projects[$i - 1]->logo; ?>">
                    <span id="cliente-ultimos-proyectos<?php echo $i; ?>" class="museo-font cliente-ultimos-proyectos <?php echo $i == 1 ? '' : 'hidden' ?>"><?php echo $projects[$i - 1]->client_name; ?></span>

                </p>



                <div id="categorias-ultimos-proyectos<?php echo $i;?>" class="categorias-ultimos-proyectos <?php echo $i == 1 ? '' : 'hidden' ?>">
                    
                              <?php if ($projects[$i-1]->marketing): ?>
                        <img alt="desarrollo web" src="<?php echo $paths->images ;?>/Iconos/marketing_icono_mini.png">
                    <?php endif; ?>

                        
                         <?php if ($projects[$i-1]->publicidad): ?>
                        <img alt="desarrollo web" src="<?php echo $paths->images ;?>/Iconos/publicidad_icono_mini.png">
                    <?php endif; ?>

                        
                         <?php if ($projects[$i-1]->artes_graficas): ?>
                        <img alt="desarrollo web" src="<?php echo $paths->images ;?>/Iconos/artes_graficas_icono_mini.png">
                    <?php endif; ?>
                        
                        
                    <?php if ($projects[$i-1]->desarrollo_web): ?>
                        <img alt="desarrollo web" src="<?php echo $paths->images ;?>/Iconos/desarrollo_web_icono_mini.png">
                    <?php endif; ?>
          
                   
                   
                </div>



            <?php endfor; ?>



        </div>


        <?php while ($project = db_fetch_object($results)): ?>
            <img>

        <?php endwhile; ?>


    </div>
<?php endif;?>