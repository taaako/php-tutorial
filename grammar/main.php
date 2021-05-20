<?php

// #22
function showAd($message = 'Ad') // 仮引数 / '初期値'
{
    echo '------------' . PHP_EOL;
    echo '-----' . $message . '-----' . PHP_EOL;
    echo '------------' . PHP_EOL;
}

showAd('Header Ad'); // 実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer Ad');

// #23 return / #24 scope

$rate = 1.1; // グローバルスコープ

function sum($a, $b, $c)
{
    // echo $a + $b + $c .PHP_EOL;
    // global $rate;
    $rate = 1.08; // ローカルスコープ
    return ($a + $b + $c) * $rate;
    // return のあとは実行されない。
    echo 'Here!' . PHP_EOL;
}

// sum(100, 200, 300);
// sum(300, 400, 500);

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;