<?php
mkdir("test",0777,true);
file_put_contents("test/f.text", "hello");
file_put_contents("test/d1/f.text", "hello");
file_put_contents("test/d1/d2/f.text", "hello");
file_put_contents("test/d1/d2/f.text", "hello");
sleep(10);

// unlink("test/f.text");
// rmdir("test");

deleteDir(getcwd().DIRECTORY_SEPARATOR."test");

function deleteDir($path) {
    $fileInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach($fileInPath as $file) {
            if("."!=$file && ".." != $file){
                $filePath = $path.DIRECTORY_SEPARATOR.$file;
                
                if (is_dir($filePath)) {
                    deleteDir($filePath);
                } else {
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}
