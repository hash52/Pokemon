<?php
require_once('fire.php');
require_once('water.php');
require_once('grass.php');
require_once('normal.php');
//enumで実装したい..
class Type{

    protected $effectiveTypes;
    protected $weeknessTypes;

    public function getDamageRate($pokemon){
        $rate = 1;
        foreach($pokemon->types as $type){
            if(in_array($type, $this->effectiveTypes)){
                $rate *= 2;
            }
            if(in_array($type, $this->weeknessTypes)){
                $rate *= 0.5;
            }
        }
        return $rate;
    }
}
