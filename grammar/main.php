<?php

// データ型
// string / int / float / null / bool / array / object

$a = 'hello';
$b = 10;
$c = -1.3;
$d = null;
$e = true;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// 型のキャスト
$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);