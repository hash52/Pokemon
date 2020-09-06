<?php
require_once('types/type.php');

class Water extends Type{
    private static $instance;

    private function __construct(){
        $this->effectiveTypes = [Fire::getInstance()];
        $this->weeknessTypes = [Grass::getInstance()];
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Water();
        }
        return self::$instance;
    }
}
