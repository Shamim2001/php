<?php
function copyDir($source, $destination) {
    $fileCount = 0;
    $source = rtrim($source, "/");
    $destination = rtrim($destination, "/");

    if (!file_exists($destination)) {
        mkdir($destination);
    }


    foreach (scandir($source) as $file) {
        if ("." !=$file && "." != $file) {
            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationPath = $destination.DIRECTORY_SEPARATOR.$file;

            if (is_dir($sourcePath)) {
                $fileCount += copyDir($sourcePath, $destinationPath);
            } elseif (is_file($sourcePath)){
                $fileCount++;
                copy($sourcePath, $destinationPath);
            }
        }
    }
    return $fileCount;
}

$source = getcwd()."/source/twentytwentyone";
$destination = getcwd()."/terget/twentytwentyone";
$fc = copyDir($source, $destination);
echo "Total {$fc} files have been copies ";