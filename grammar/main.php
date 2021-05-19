<?php

// if === の時の条件分岐 -> switch
$signal = 'red';

switch ($signal) {
    case 'red':
        echo 'Stop!' . PHP_EOL;
        break;
    case 'yellow':
        echo 'Caution' . PHP_EOL;
        break;
    case 'blue':
        echo 'Go' . PHP_EOL;
        break;
}