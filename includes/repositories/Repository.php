<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Repository {

    private $db;

    public function __construct($db_info) {

        $this->db = new mysqli($db_info['host'], $db_info['user'], $db_info['password'], $db_info['db']);
    }

    public function query($query, $arguments=null, $options=null) {

        $queryData = $this->db->query($query);
        
        if ($queryData) {
            $queryResults = array();
            while ($result = $queryData->fetch_object()) {
                $queryResults[] = $result;
            }

            return $queryResults;
        }
        return false;
    }

    public function escapeString($string) {
        return $this->db->escape_string($string);
    }
    
    public function insert($query) {

        $queryData = $this->db->query($query);
    
        return $queryData;
    }

  
}

?>
