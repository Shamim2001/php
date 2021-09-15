<?php
session_start([
    'cookie_lifetime'=>300, // 5 min session
]);

$error = false;

// session_destroy(); 

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$fp = fopen("./data/users.txt", "r");

if ($username && $password) {
    $_SESSION['loggedin'] =false;
    ($_SESSION['user']) == false;
    ($_SESSION['role']) == false;

    while ( $data = fgetcsv($fp) ) {
        if ($data[0] == $username && $data[1] == sha1($password) ) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] == $username;
            $_SESSION['role'] == $data[2];
            print_r($_SESSION['role']);
            header('location:index.php');
        }
    }
    if (!$_SESSION['loggedin']) {
        $error = true;
    }
}

if(isset($_POST['logout']) ) {
    
    session_destroy();
    $_SESSION['loggedin'] =false;
    $_SESSION['user'] == false;
    $_SESSION['role'] == false;
    header("location:index.php");
}

// $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
// $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
// $fp = fopen("./data/users.txt", "r");
// if ( $username && $password) {
//     $_SESSION['loggedin'] =false;
//     $_SESSION['user'] = false;
//     while ( $data = fgetcsv($fp) ) {
//         if ( $data[0]== $username && $data[1] == $password) {
//             $_SESSION['loggedin'] =true;
//             $_SESSION['user'] = $username;
//             header('location:index.php');
//         }
//     }
//     if (!$_SESSION['loggedin']) {
//         $error = true;
//     }
// }


// if(isset($_GET['logout']) ) {
//     $_SESSION['loggedin'] =false;
//     $_SESSION['user'] = false;
//     session_destroy();
//     header('location:index.php');
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{
            margin-top: 50px;
        }
        button{
            margin: 70px 0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column colum-60 column-offset-20">
                <h1>Simple Auth Example</h1>
            </div>
        </div>
        <div class="row">
            <div class="column colum-60 column-offset-20 pb-5">
                <?php
                // echo md5('rabbit')."<br />";
                if (true == $_SESSION['loggedin']) {
                    echo "Hello Admin, Wellcome!";
                } else {
                    echo "Hello Stranger, log Below";
                }
                
                ?>
            </div>
        </div>

        <div class="row">
            <div class="column colum-60 column-offset-20">
                <?php
                if($error) {
                    echo "<blockquote>Username Or Password did'n Match</blockquote>";
                }
                if(false == $_SESSION['loggedin']): 
                ?>
                <form method="POST" style="width:600px; margin-top: 60px;" >
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button type="submit" class="primary-button p-4" name="submit">Log In</button>
                </form>
                <?php
                else:
                ?>
                <form action="login.php" method="POST" >
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="primary-button" name="submit">Log Out</button>
                </form>

                <?php
                endif;

                ?>

            </div>
        </div>
    </div>
</body>
</html>