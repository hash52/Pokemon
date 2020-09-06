<?php
require_once('types/type.php');

class Grass extends Type{
    private static $instance;

    private function __construct(){
        $this->effectiveTypes = [Water::getInstance()];
        $this->weeknessTypes = [Fire::getInstance()];
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Grass();
        }
        return self::$instance;
    }
}
