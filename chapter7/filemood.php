<?php
// different mood open file
$filename = $filename = "A:\php/chapter7/f3.txt"; // path name
$fp = fopen($filename, "a+"); // file open r+ mood
$line = fgets($fp);
echo $line;

fwrite($fp, "sadik\n");
$line = fgets($fp);
fwrite($fp, "shamim\n");
$line = fgets($fp);
echo $line;
fclose($fp);