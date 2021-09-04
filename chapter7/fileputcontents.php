<?php
// file_put_contents function add new value in our file. add f4 file save value
$filename = "A:\php/chapter7/f4.txt";
file_put_contents($filename,"Shamim",FILE_APPEND);
file_put_contents($filename, "Ahmed",FILE_APPEND);
file_put_contents($filename, "sadik",FILE_APPEND);