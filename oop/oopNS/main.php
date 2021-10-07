<?php
namespace CloudStorage;
require "autoload.php";  



use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main{
    function __construct()
    {
       $mailer = new Mailer();
       echo $mailer->sendMail();

       $scan = new Scanner();
       echo $scan->scan();

       $jpeg = new Jpeg();
       echo $jpeg -> getDimension();
    }

}

new main();