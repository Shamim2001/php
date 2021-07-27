<?php

/* 
echo "1 \n";
echo "2 \n";
echo "3 \n";
echo "4 \n";
echo "5 \n";
echo "6 \n";
echo "7 \n";
*/
echo "for loop & nested for loop";
echo PHP_EOL;
for($i = 1; $i <= 10; $i++) {
    echo $i;
    echo PHP_EOL;
    for($j = 0; $j <= $i; $j++) {
        echo "*🥰";
    }
}
echo PHP_EOL; 

// while loop
echo "while loop";
echo PHP_EOL;

$i = 1;
while($i < 10) {
    echo $i;
    echo PHP_EOL;
    $i++;
} 
echo PHP_EOL;

// Do While Loop
echo "Do While loop";
echo PHP_EOL;

$i = 0;
do {
    
    $i++;
    echo $i;
    echo PHP_EOL;
} while($i < 11); 

// goto loop
echo "goto loop \n";
$i=0;
b: $i++;
echo $i.PHP_EOL;
if($i < 10) goto b;



