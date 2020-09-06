<?php

class Pokemon{
    public $name;
    public $hp;
    public $attack;
    public $defence;
    public $moves;
    private $types;

    public function __construct($name, $hp, $attack, $defence, $types, $moves){
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->types = $types;
        $this->moves = $moves;
    }

    /*
    ダメージ計算[https://wiki.ポケモン.com/wiki/ダメージ#.E7.AC.AC.E4.BA.94.E4.B8.96.E4.BB.A3.E4.BB.A5.E9.99.8D]
    */
    public function attack($enemy, $move_num){
        $move = $this->moves[$move_num];
        $enemy->hp = $enemy->hp - $this->calcDamage($enemy, $move);
    }

    private function calcDamage($enemy, $move){
        return ($move->damage * $this->attack/$enemy->defence)/50 * $move->type->getDamageRate($move,$enemy);
    }
}
