<?php
require_once('types/type.php');

class Fire extends Type{
    private static $instance;

    private function __construct(){
        $this->effectiveTypes = [Grass::getInstance()];
        $this->weeknessTypes = [Water::getInstance()];
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Fire();
        }
        return self::$instance;
    }
}
