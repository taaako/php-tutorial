<?php

$sum = function ($a, $b, $c) { // 無名関数
    return $a + $b + $c;
};

echo $sum(100, 300, 500) . PHP_EOL;

// #26
function cal($a, $b, $c)
{
    $total = $a + $b + $c;

    // if ($total < 0) {
    //     return 0;
    // } else {
    //     return $total;
    // }
    // 条件演算子の簡略版 return 条件 ? 値 : 値
    return $total < 0 ? 0 : $total;
}

echo cal(100, 300, 500) . PHP_EOL;
echo cal(-1000, 300, 500) . PHP_EOL;