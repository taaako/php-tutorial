<?php

// 単一の値でのfalse判定
// false / 0 / 0.0 / '0' / '' / null / []

$score = 40;

if ($score >= 80) {
    echo 'Great!' . PHP_EOL;
} else if ($score >= 60) {
    echo 'Good' . PHP_EOL;
} else {
    echo 'OK' . PHP_EOL;
}