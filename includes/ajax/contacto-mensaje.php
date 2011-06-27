<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre = mysqli_real_escape_string($_POST['nombre']);
$email = mysqli_real_escape_string($_POST['email']);
$empresa = mysqli_real_escape_string($_POST['empresa']);
$mensasje = mysqli_real_escape_string($_POST['mensaje']);
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

?>
