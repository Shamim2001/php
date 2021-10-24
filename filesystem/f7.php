<?php
const FILENAME = "A:\php\chapter9\date.php";

// echo pathinfo(FILENAME, PATHINFO_BASENAME);
// echo pathinfo(FILENAME, PATHINFO_DIRNAME);
// echo pathinfo(FILENAME, PATHINFO_EXTENSION);
// echo pathinfo(FILENAME, PATHINFO_FILENAME);

echo pathinfo(pathinfo(FILENAME, PATHINFO_DIRNAME), PATHINFO_BASENAME);