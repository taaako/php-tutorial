<?php

// ...で仮引数に何個でも入れられる -> 可変長引数
function getStats(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    // 配列の個数 -> count
    return [$total, $total / count($numbers)];
}

// echo sum(1, 3, 5) . PHP_EOL;
// echo sum(4, 2, 5, 1) . PHP_EOL;
// print_r(getStats(1, 3, 5));

// 複数の返り値を受け取る。どちらも同じ。
// list($sum, $average) = getStats(1, 3, 5);
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;