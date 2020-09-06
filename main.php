<?php
require_once('pokemon.php');
require_once('move.php');
require_once('types/type.php');

// $moves1[] = new Move("たいあたり", 35);
// $moves1[] = new Move("でんきショック", 40);
// $pikachu = new Pokemon("ピカチュウ", 24, 60, 50, $moves1);
// $moves2[] = new Move("たいあたり", 35);
// $moves2[] = new Move("しっぽをふる", 0);
// $koratta = new Pokemon("コラッタ", 11, 20, 10, $moves2);

$hitokage = new Pokemon("ヒトカゲ", 100, 50, 50, [Fire::getInstance()],[new Move("ひのこ",40, Fire::getInstance())]);
$fushigidane = new Pokemon("フシギダネ", 100, 50, 50, [Grass::getInstance()],[new Move("つるのムチ",40, Grass::getInstance())]);
$zenigame = new Pokemon("ゼニガメ", 100, 50, 50, [Water::getInstance()],[new Move("あわ",40, Water::getInstance())]);
$koratta = new Pokemon("コラッタ", 100, 50, 50, [Normal::getInstance()],[new Move("たいあたり",40, Normal::getInstance())]);

// var_dump($koratta);
// $pikachu->attack($koratta, 1);
// var_dump($koratta);

//等倍
var_dump($koratta);
$hitokage->attack($koratta, 0);
var_dump($koratta);

//0.5倍
var_dump($zenigame);
$hitokage->attack($zenigame, 0);
var_dump($zenigame);

//２倍
var_dump($fushigidane);
$hitokage->attack($fushigidane, 0);
var_dump($fushigidane);
