<?php

// if === の時の条件分岐 -> switch
// or, || の場合、case を追加する
// default でそれ以外の時の分岐に
$signal = 'pink';

switch ($signal) {
    case 'red':
        echo 'Stop!' . PHP_EOL;
        break;
    case 'yellow':
        echo 'Caution' . PHP_EOL;
        break;
    case 'blue':
    case 'green':
        echo 'Go' . PHP_EOL;
        break;
    default:
        echo 'Wrong signal' . PHP_EOL;
        break;
}