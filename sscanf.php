<?php
// sscanf using data store
$name = " Shamim Ahmed 01234567890";

$parts = sscanf($name, "%s %s %11ds" );
print_r($parts);

sscanf($name, "%s %s %11ds", $fname, $lname, $mobile);
echo $fname;
echo PHP_EOL;
echo $lname;
echo PHP_EOL;
echo $mobile;