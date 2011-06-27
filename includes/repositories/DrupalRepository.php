<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


 
require_once dirname(__FILE__)."/Repository.php";

class DrupalRepository extends Repository
{
    private $db_info;
    private $db_resource;
    
    public function __construct() {
      
        $db_info = array("host"=>"localhost","user"=>"5050mkt","password"=>"sle9her","db" => "5050mkt_drupal");
        
        parent::__construct($db_info);
        
    }
      
    
    
}


?>
