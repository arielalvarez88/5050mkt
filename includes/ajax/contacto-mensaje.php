<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$subject = "Prueba";
$to = 'contacto@5050mkt.com';
$body = 'hola eto e una prudeba';
$response = new stdClass();
$response->header = 'Error';
    $response->body = 'Ha ocurrido un error, inténtelo más tarde';
if(mail($subject,$to,$body))
{
    
    $response->header = 'Confirmación';
    $response->body = 'Su mensaje fue enviado';
    echo json_encode($response);
}

echo json_encode($response);

?>
