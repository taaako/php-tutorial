<?php

$moreScores = [
    55,
    72,
    'perfect',
    [90, 42, 88],
];

$scores = [
    90,
    40,
    // 配列のなかに配列をいれると多重になってしまう-> ...をつける(php7.4以上)
    ...$moreScores,
    100,
];

print_r($scores);
echo $scores[2][2] . PHP_EOL;