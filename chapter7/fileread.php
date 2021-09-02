<?php
$filename = "A:\php/chapter7/f1.txt";

$fp = fopen($filename, 'r');

while ($line = fgetc($fp)) {
    echo $line;
}
rewind($fp);
fseek($fp, 2);

while ($line = fgetc($fp)) {
    echo $line;
}
fclose($fp);

// quickly read data
$data = file($filename);
print_r($data);

// second method quickly read data 
$readData = file_get_contents($filename);
echo $readData;