<?php
    require_once "inc/templates/function.php";
    $info = '';
    $task = $_GET['task'] ?? 'report';
    $error = $_GET['error'] ?? '0';

    // delete student code  
    if ('delete'==$task) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        if ($id > 0) {
            deleteStudent($id);
            header('location:index.php?task=report');
        }
    }

    if ('seed'== $task) {
        seed();
        $info = "Seeding is Complite";
    }
    $fname = '';
    $lname ='';
    $roll ='';
    if ( isset($_POST['submit'])) {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

        if ($id) {
            // update the Existing student
            if ($fname !='' && $lname !='' && $roll !='') {
               $result = updateStudent($id, $fname, $lname, $roll);
               if ($result) {
                    header('location:index.php?task=report');
                } else {
                    $error=1;
                }
            }

        } else {
            // new student add 
            if ($fname !='' && $lname !='' && $roll !='') {
                $result = addStudent($fname, $lname, $roll);
                if ($result) {
                    header('location:index.php?task=report');
                } else {
                   $error=1;
                }   
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
            <h1>Project02-CRUD</h1>
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
                <!-- totall students list call -->
                <!-- <div>
                    <pre>
                        <?php printRow(); ?>
                    </pre>
                </div> -->
            </div>
        </div>
        <?php endif; ?>

        <!-- Add Student from -->
        <?php if ('add' == $task): ?>
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <form action="index.php?task=add" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?> ">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?> ">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll; ?> ">
                    <button type="submit" class="button-primary" name="submit">Save</button>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <!-- edit form  -->
        <?php 
        if ('edit' == $task): 
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
        $student = getStudent($id);
        if ($student):
        ?>
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <form  method="POST">
                    <input type="hidden" value="<?php echo $id ?> " name="id">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?> ">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?> ">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?> ">
                    <button type="submit" class="button-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
        <?php 
        endif;
    endif; 
        
        ?>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>