<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once dirname(__FILE__)."/../database.mysqli.inc";

class DrupalRepository 
{
    private $db_info;
    private $db_resource;
    
    public function __construct() {
        
        $db_info = "mysql://5050mkt:sle9her@mysql.5050mkt.com/5050mkt_drupal";
        $db_resource = db_connect($db_info);
    }
    
    public static function getResource() {
        return $db_resource;
    }
    
}


?>
