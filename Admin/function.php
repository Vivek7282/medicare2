



<?php
session_start();
require 'config.php';

echo '1';
//user login code
if(isset($_POST['addUser']))
{
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);


    $query= "SELECT * FROM USERS where email= '$email' and password='$pass' ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $_SESSION['userId'] = $row->USER_ID;
            $_SESSION['userName'] = $row->NAME;
            $_SESSION['usePic'] = $row->IMAGE;  
            header('location : adminDashboard.php');
        }
    }
    else{
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}



?>