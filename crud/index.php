<?php
    require_once "inc/templates/function.php";
    $info = '';
    $task = $_GET['task'] ?? 'report';
    $error = $_GET['error'] ?? '0';
    if ('seed'== $task) {
        seed();
        $info = "Seeding is Complite";
    }

    if ( isset($_POST['submit'])) {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_EMAIL);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_EMAIL);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_EMAIL);

        if ($fname !='' && $lname !='' && $roll !='') {
            $result = addStudent($fname, $lname, $roll);
            if ($result) {
                header('location:index.php?task=report');
            } else {
                header('location:index.php?task=report&error=1');
            }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project02-CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
            <h1>Project02- CRUD</h1>
            <p>A sample project to perform CRUD using plan files and PHP</p>

            <?php include_once ('inc/templates/nav.php'); ?>

            <?php
            if ($task != '') {
                echo "<p>{$info}</p>";
            }
            ?>
            </div>
        </div>
        <?php if ('1' == $error): ?>
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <blockquote>
                    Duplicate Roll Number!
                </blockquote>
            </div>
        </div>
        <?php endif; ?>

        <?php if ('report' == $task): ?>
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Add Student from -->
        <?php if ('add' == $task): ?>
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <form action="index.php?report" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <label for="roll">Age</label>
                    <input type="number" name="roll" id="roll">
                    <button type="submit" class="button-primary" name="submit">Save</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>