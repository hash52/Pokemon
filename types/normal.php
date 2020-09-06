<?php
require_once('types/type.php');

class Normal extends Type{
    private static $instance;

    private function __construct(){
        $this->effectiveTypes = [];
        $this->weeknessTypes = [];
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Normal();
        }
        return self::$instance;
    }
}
