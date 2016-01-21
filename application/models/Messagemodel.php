<?php
class Messagemodel extends My_DModel{
    function __construct() {
        parent::__construct();
        $this->init("PdMessage",$this->doctrine->em);
    }
}
?>