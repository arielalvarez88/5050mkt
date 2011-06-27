<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre = mysql_escape_mimic($_POST['nombre']);
$email = mysql_escape_mimic($_POST['email']);
$empresa = mysql_escape_mimic($_POST['empresa']);
$mensasje = mysql_escape_mimic($_POST['mensaje']);
$to = 'contacto@5050mkt.com';
$response = new stdClass();
$response->header = 'Error';
    $response->body = 'Ha ocurrido un error, inténtelo más tarde';
if(mail($to,$nombre.'-'.$empresa,$mensaje))
{
    
    $response->header = 'Confirmación';
    $response->body = 'Su mensaje fue enviado';
    echo json_encode($response);
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
