<?php

$filename = "A:\php/chapter7/f2.txt";

$fp = fopen($filename, "w");
fwrite($fp, "Shamim \n");
fwrite($fp, "Ahmed \n");
fclose($fp);