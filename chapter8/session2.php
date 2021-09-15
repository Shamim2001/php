<?php
session_name('myapp');
session_start();
echo $_SESSION['name'];


echo sha1('rabbit');