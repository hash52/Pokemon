<?php

class Move{
  public $name;
  public $damage;
  function __construct($name, $damage){
    $this->name = $name;
    $this->damage = $damage;
  }
}