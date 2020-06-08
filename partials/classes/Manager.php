<?php

include_once __DIR__ . '/../Dipendente.php';

class Manager extends Dipendente {

    public $degree;
    public $salary;

    public function __construct($_name, $_surname, $_id, $_degree, $_salary) {
        parent::__construct($_name, $_surname, $_id);

        $this->degree = $_degree;
        $this->salary =  "€" . number_format($_salary, 2);
    }

}

?>