<?php

// 型指定するだけでは文字列の数値をintに変換してしまう。(弱い)
// なので、強い型付けをしたければ declare文を最初につける。
declare(strict_types=1);

function showInfo(string $name, int $score): void
{
    echo $name . ': ' . $score . PHP_EOL;
}

showInfo('sato', 40);
// Argument 2 のエラー (2番目の引数のエラー)
// showInfo('sato', '4');

// 返り値の型に？をつけると、nullか指定した型かのどちらかであるという指定ができる。
function getAward(int $score): ?string
{
    return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
// nullになるので、？がなければエラーになる。
echo getAward(40) . PHP_EOL;