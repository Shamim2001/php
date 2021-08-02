<?php
/*
function doTheLargeTask() {
    echo "Step A Done \n";
    echo "Step B Done \n";
    echo "Step C Done \n";
    echo "Step D Done \n";
    echo "Step E Done \n";
} */

doTheLargeTask();

// code clean function 
function TaskA(){
    echo "Step A Done \n";
}
function TaskB(){
    echo "Step B Done \n";
}
function TaskC(){
    echo "Step C Done \n";
}
function TaskD(){
    echo "Step D Done \n";
}
function TaskE(){
    echo "Step E Done \n";
}

function doTheLargeTask() {
    TaskA();
    TaskB();
    TaskC();
    TaskD();
    TaskE();
}