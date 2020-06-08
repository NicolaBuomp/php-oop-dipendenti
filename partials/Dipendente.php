<?php

class Dipendente {
    public $name;
    public $surname;
    public $id;

    public function __construct($_name, $_surname, $_id){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->id = $_id;

        // if(is_int($_name)) {
        //     throw new Exception('Errore');
        // }
        
        // return $_name;
    
        // try {
        //     true;
        // } catch(Exception $e) {
        //     echo '<br>Message: ' . $e->getMessage(). '<br>';
        // }
    }
};