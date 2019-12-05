<?php

    require_once 'conn.php';

if(isset($_POST['submit'])){
    $name   = mysqli_real_escape_string($conn, $_POST['uname']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $year   = mysqli_real_escape_string($conn, $_POST['years']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $married= mysqli_real_escape_string($conn, $_POST['married']);
    $workin= mysqli_real_escape_string ($conn, $_POST['workin']);

    $sql = "INSERT INTO crud(Name,Email,phonenumber,Gender,years,weight,married,workin)
    VALUES ('$name', '$email', '$phone','$gender','$year','$weight','$married','$workin')";
       
        if (mysqli_query($conn,$sql)) {
            header("Location:fech.php");
            exit();
        }else{
            echo "ERROR: not able to execute $sql.".mysqli_error($conn);
        
        }
        

}
        ?>    