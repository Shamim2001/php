<?php
$filename = "A:\php/chapter7/f1.txt";

$fp = fopen($filename, 'r');

while ($line = fgetc($fp)) {
    echo $line;
}
fclose($fp);