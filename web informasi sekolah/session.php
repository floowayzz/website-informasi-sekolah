<?php
session_start();
function ceklogin(){
    if(!isset($_SESSION['first_name'])){
        header("Location: index.php");
        exit();
    }
}
function cekudahlogin(){
    if(isset($_SESSION['first_name'])){
        header("Location: home.php");
        exit();
    }
}
function user($first_name){
    $_SESSION['first_name'] = $first_name;
    header("Location: home.php");
    
}
function logot(){
    session_unset();
    session_destroy();
}
?>