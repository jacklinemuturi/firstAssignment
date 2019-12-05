<?php
if(isset($_POST['edit'])){

    $name   = $_POST['uname'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $gender = $_POST['gender'];
    $year   = $_POST['years'];
    $weight = $_POST['weight'];
    $married= $_POST['married'];
    $workin = $_POST['workin'];

    if(empty($name)|| empty($email)|| empty($gender)|| empty($year)|| 
        empty($weight)|| empty($married)|| empty($workin)){ 
        header("Location:assign.php?fields=empty");
         exit();
    elseif(!preg_match("/^[a-zA-Z]*&/",$uname){
        header("Location:assign.php?fields=name");
        exit();
    }

}                                











?>