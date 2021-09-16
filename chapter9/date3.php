<?php
echo time()."\n";
echo mktime(0,0,0,9,1,2021)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,9,1,2021)."\n";
echo gmmktime(0,0,0,9,1,2021)."\n";
echo (54400-32800)/(60*60)."\n";

echo (mktime(0,0,0,9,10,2021) - mktime(0,0,0,8,31,2021))/(24*60*60);

