<?php
require_once dirname(__FILE__) . "/../repositories/DrupalRepository.php";
require_once dirname(__FILE__) . "/../paths.php";


$drupalRepository = new DrupalRepository();
/* Old */
//$query = "SELECT * from (select ct.nid, u.dst as path, ct.field_proyecto_descripcion_value as descripcion, ct.field_proyecto_artes_graficas_value as artes_graficas, ct.field_proyecto_desarrollo_web_value as desarrollo_web, ct.field_proyecto_publicidad_value as publicidad, ct.field_proyecto_marketing_value as marketing, f.filepath as screenshot, ct.field_proyecto_nombre_cliente_value as client_name, ct.field_logo_cliente_fid as logo_id  from content_type_proyecto ct INNER JOIN files f on ct.field_proyecto_screenshot_fid  = f.fid INNER JOIN url_alias u on u.src = CONCAT('node/', nid)) a INNER JOIN (select f.filepath as logo, ct.field_logo_cliente_fid as logo_id from content_type_proyecto ct INNER JOIN files f on ct.field_logo_cliente_fid = f.fid) b on a.logo_id = b.logo_id";
$query = "SELECT f.filepath as screenshot, u.dst as path from content_type_proyecto ct INNER JOIN files f on ct.field_proyecto_slideshow_fid  = f.fid INNER JOIN url_alias u on u.src = CONCAT('node/', ct.nid)";
$projects = $drupalRepository->query($query);
?>

<div id="ultimos-proyectos-header">
    <h1 class="museo-font">
        Proyectos Recientes
    </h1>

</div>

<?php if ($projects): ?>

    <div id="ultimos-proyectos">






        <div id="ultimos-proyectos-slides">
            <?php for ($i = 1; $i <= count($projects); $i++): ?>
                <div class="ultimos-proyectos-group">
                    <div class="ultimos-proyectos-screenshots-container">
                        <a href="<?php echo $projects[$i - 1]->path; ?>">
                            <?php echo theme('imagecache','front_page_slides',$projects[$i - 1]->screenshot,'foto-del-proyeccto','foto-del-proyecto',array("class" => "ultimos-proyectos-screenshot", "id"=> "screenshots-ultimos-proyectos".$i));?>
                                                            
                        </a>
                    </div>
                </div>


            <?php endfor; ?>
        </div>
        <div id="ultimos-proyectos-nav-container">
            <div id="ultimos-proyectos-nav">

            </div>
        </div>


    </div>
<?php endif; ?>