<?php
$d1 = new DateTime('20 May 2000');
$d2 = new DateTime('27 March 2021');
$difference = $d1->diff($d2);

echo $difference->format('%y Year %m Month %d Days');
