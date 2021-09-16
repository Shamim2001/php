<?php

echo mktime(0,0,0,12,12,1980)."\n"; // gmt formate
echo strtotime("12 December, 1980")."\n";

echo time()."\n";
echo strtotime("now")."\n"; // present time
echo strtotime("+3days"); // before 3 days time

echo (strtotime("+3days") - strtotime("now"))/(86400)."\n";

echo date('H:i:s A', strtotime('13 August 2005 11:12:05 AM'));


