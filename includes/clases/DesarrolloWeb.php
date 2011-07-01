<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DesarrolloWeb
 *
 * @author ariel
 */
require_once dirname(__FILE__).'/Servicio.php';
class DesarrolloWeb extends Servicio{
    //put your code here
    public function __construct() {
          
        $descripcion = "Hoy en día, la tecnología juega un papel esencial en la comunicación cotidiana de la sociedad. Las plataformas digitales le brindan a las empresas medios alternativos y eficaces, que permiten establecer relaciones que tienden a perdurar en el tiempo. ";
         $puntosClavesIntro = "Contamos con la experiencia tecnológica que permitirá conectar su empresa con el consumidor de forma diferente y virtual, mediante:";
        $puntosClaves= array('Diseño y programación de páginas web.','Desarrollo de aplicaciones personalizadas basadas en la web.','Web Hosting.','Implementaciones de software.','SEO - Optimización en motores de búsqueda.');
        $sceenshots = array('primero');
        $descripcionCorta = 'Conecta tus actividades empresariales al mundo virtual.';
        parent::__construct($descripcion, $puntosClavesIntro, $puntosClaves, $screenshots,$descripcionCorta);
    }
}
?>
