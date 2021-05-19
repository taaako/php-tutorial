<?php

$name = 'sato';

// "" の中に '' で '' の表示を可能に
// "" の中であれば変数を埋め込める
// "" の中で "" を表示させるには \"\"
// \t で tab 表示可能

echo "Hello I'm ". $name . PHP_EOL;
echo "Hi $name" . PHP_EOL;