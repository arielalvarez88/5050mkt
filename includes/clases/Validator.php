<?php

class Validator
{
    
    public function validate_email($email)
    {
        
        return preg_match('/^(\w+)@([a-z]+\.[a-z]{3})/');
    }
}

?>
