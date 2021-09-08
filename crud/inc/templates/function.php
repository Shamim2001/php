<?php

define('DB_NAME', 'A:\php\crud/data/db.txt');
function seed() {
    $students = array(
        array(
            'id'    => 1,
            'fname' => 'Shamim',
            'lname' => 'Ahmed',
            'roll' => 12,
        ),
        array(
            'id'    => 2,
            'fname' => 'Shamim',
            'lname' => 'Ahmed',
            'roll' => 11,
        ),
        array(
            'id'    => 3,
            'fname' => 'Sadik',
            'lname' => 'Ahmed',
            'roll' => 10,
        ),
        array(
            'id'    => 4,
            'fname' => 'Rahim',
            'lname' => 'Ahmed',
            'roll' => 9,
        ),
        array(
            'id'    => 5,
            'fname' => 'Rajjak',
            'lname' => 'Ahmed',
            'roll' => 8,
        ),
    );

    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

// =====All Students CLick function=====
function generateReport() {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th width="25%">Action</th>
        </tr>
        <?php
            foreach ($students as $student) {
                ?>
                <tr>
                    <td><?php printf('%s %s', $student['fname'],$student['lname']); ?></td>
                    <td><?php printf('%s', $student['roll']); ?> </td>
                    <td><?php printf( '<a href="index.php?task=edit&id=%s">Edit</a> | <a href="index.php?task=delete&id=%s">Delete</a>', $student['id'],$student['id']);  ?> </td>
                </tr>
                <?
            }

        ?>
    </table>
    <?php
}

function addStudent($fname, $lname, $roll) {
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $_student) {
        if ($_student['roll'] == $roll ) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $newId = count($students) +1;
        $newStudent = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );

        array_push($students, $newStudent);
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
    } 
    return false;

}