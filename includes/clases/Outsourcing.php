<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Outsourcing
 *
 * @author ariel
 */
require_once dirname(__FILE__).'/Servicio.php';
class Outsourcing extends Servicio{
    //put your code here
    public function __construct() {
          
        $descripcion = "A través de nuestra modalidad de outsourcing podemos convertirnos en su aliado estratégico, convirtiéndonos así,  en un departamento externo de su empresa donde podrá beneficiarse de nuestros servicios. Nos empoderamos de la funciones de mercadeo y publicidad para lograr implementar las mejores estrategias de desarrollo y proyección en el mercado.";
         $puntosClavesIntro = "Entre los beneficios que te ofrecemos mediante la modalidad de outsourcing:";
        $puntosClaves= array('Mejoran los procesos de planeación, implementación y control de las actividades de mercadeo y publicidad.','Facilitan el acceso al mercado y a potenciales oportunidades de negocios a través de nuestra empresa.',' Reduce los costos operativos mediante la delegación de tareas a nuestro personal;  profesional en el área y con mayor experiencia en la creación de estrategias creativas e innovadoras.','Usted adquiere mayor disponibilidad de tiempo para concentrarse en las actividades principales de su empresa.','Reporte mensual detallando el progreso de las estrategias implementadas según el plan de acción propuesto.');
        $descripcionCorta="A través de nuestra modalidad de outsourcing podemos convertirnos en su aliado estratégico.";
        $sceenshots = array('primero');
       
        parent::__construct($descripcion, $puntosClavesIntro, $puntosClaves, $screenshots,$descripcionCorta);
    }
}
?>
