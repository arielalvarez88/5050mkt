<?php

require_once dirname(__FILE__) . '/../repositories/DrupalRepository.php';
require_once dirname(__FILE__) . '/../clases/Validator.php';
$response = new stdClass();
$validator = new Validator();
$response->header = 'Error';
$response->body = 'Introduzca un email válido';

if ($_POST['email']) {
    $drupalRepository = new DrupalRepository();
    $email = $drupalRepository->escapeString($_POST['email']);
    if($validator->validate_email($email))
    {
        
        $query = "INSERT INTO contactos (email) VALUES ('" .$email."')";

        $results = $drupalRepository->insert($query);
        if($results)
        {
           $response->header = 'Confirmado';
           $response->body = $email.' ha sido agregado en el newsletter.';
        }
        else
        {
            $response->header = 'Error';
           $response->body = 'Intentelo más tarde.';
        }
            
        
    }
    
    
    
    
}

echo json_encode($response);
?>
