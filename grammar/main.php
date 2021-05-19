<?php

for ($i = 1; $i <= 5; $i++) {
    echo "$i - Hello" . PHP_EOL;
}

$hp = 100;

while ($hp > 0) {
    echo "Your HP: $hp" . PHP_EOL;
    $hp -= 15;
}

// do-while 1回でも処理をまわす
do {
    echo "Your HP: $hp" . PHP_EOL;
    $hp -= 15;
} while ($hp > 0);

// continue / break
for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 === 0) {
        continue;
    }
    if ($i === 4) {
        break;
    }
    echo $i . PHP_EOL;
}