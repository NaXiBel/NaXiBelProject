<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLException
 *
 * @author Amélie
 */
class MySQLException extends Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
    
    public function retourneErreur(){
        $message  = '<div><strong>' . $this->getMessage() . '</strong>';
        $message .= ' Ligne : ' . $this->getLine() . '</div>';
        return $message;
    }

}

?>