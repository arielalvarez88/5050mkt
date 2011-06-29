<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once dirname(__FILE__).'/../repositories/DrupalRepository.php';
$repository = new DrupalRepository();
$nombre = $repository->escapeString($_POST['nombre']);
$email = $repository->escapeString($_POST['email']);
$empresa = $repository->escapeString($_POST['empresa']);
$mensaje = $repository->escapeString($_POST['mensaje']);


$to = 'contacto@5050mkt.com';
$response = new stdtClass();
$response->header = 'Error';
    $response->body = 'Ha ocurrido un error, inténtelo más tarde';
if(mail($to,$nombre.'-'.$empresa,$mensaje))
{
    
    $response->header = 'Confirmación';
    $response->body = 'Su mensaje fue enviado';
    echo json_encode($response);
    return;
}

echo json_encode($response);


function mysql_escape_mimic($inp) {
    if(is_array($inp))
        return array_map(__METHOD__, $inp);

    if(!empty($inp) && is_string($inp)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    }

    return $inp;
} 

?>
