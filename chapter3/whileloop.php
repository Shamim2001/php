<?php

$i = 0;
while($i < 5) {
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo "=========\n";

$i = 0;
while($i++ < 5) {
    echo $i;
    echo PHP_EOL;
}
echo "=========\n";

$i = 0;
while(++$i < 5) {
    echo $i;
    echo PHP_EOL;
}

