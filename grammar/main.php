<?php

$scores = [
    'first'  => 90,
    'second' => 40,
    'third'  => 100, // 配列の最後に,をつけても大丈夫
];

// keyを指定していなければ連番
// $scores[1] = 60;
// echo $scores[1] . PHP_EOL;

// var_dump($scores);
// print_r($scores);

// echo $scores['third'] . PHP_EOL;

// #31
foreach ($scores as $score) {
    echo $score . PHP_EOL;
}

// key は $key で表示可能
foreach ($scores as $key => $score) {
    echo $key . ' - ' . $score . PHP_EOL;
}