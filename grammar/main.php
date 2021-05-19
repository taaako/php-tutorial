<?php

$name = 'sato';

// 終端記号
// 'EOT' : now document
// "EOT" / EOT : here doc -> 変数を埋め込める
    $text = <<<EOT
    hello! $name
        this is loooooong
    text!

    EOT;

echo $text;