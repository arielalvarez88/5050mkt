<?php

require_once dirname(__FILE__) . '/../repositories/DrupalRepository.php';
$response = new stdClass();
$response->header = 'Error';
$response->body = 'Se ha producido un error.';

if ($_POST['email']) {
    $drupalRepository = new DrupalRepository();
    $email = $drupalRepository->escapeString($_POST['email']);
    $query = "INSERT INTO contactos (email) VALUES ('" .$email."')";

    $results = $drupalRepository->insert($query);
    if($results)
    {
       $response->header = 'Confirmado';
       $response->body = $email.' ha sido agregado en el newsletter.';
    }
    
    
}

echo json_encode($response);
?>
