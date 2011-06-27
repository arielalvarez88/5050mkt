<?php

require_once dirname(__FILE__) . '/../repositories/DrupalRepository.php';


if ($_GET['email']) {
    $drupalRepository = new DrupalRepository();
    
    $query = "INSERT INTO contactos (email) VALUES ('" . $drupalRepository->escapeString($_GET['email']) ." ')";

    $results = $drupalRepository->query($query);
    
}
?>
