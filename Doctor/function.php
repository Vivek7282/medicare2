



<?php
session_start();
require_once('config.php');
//user login code
if(isset($_POST['addDoc']))
{

    $email=$_POST['email'];
    $pass=($_POST['pass']);
    
    $query= "SELECT * FROM DOCTORS where email= '$email' and passwor='$pass' ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $_SESSION['userId'] = $row->DOCTOR_ID;
            $_SESSION['userName'] = $row->D_NAME;
            $_SESSION['usePic'] = $row->pic; 
            $_SESSION['add'] = $row->ADDRES;  
            $_SESSION['email'] = $row->EMAIL;  
            $_SESSION['con'] = $row->CONTACT;   
            $_SESSION['c_id'] = $row->CITY_ID;    
            $_SESSION['d_id'] = $row->D_ID; 
            $_SESSION['dob'] = $row->DOB;     
            header('location:doctorDashboard.php');
        }
    }
    else{
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}
//update doctor
if(isset($_POST['updDoc']))
{

        $id=$_SESSION['userId'];
        $name=$_SESSION['name'];
        $add=$_SESSION['add'];
        $dob=$_SESSION['dob'];
        $email=$_SESSION['email'];
        $con=$_SESSION['con'];
    
    
    $query= "UPDATE DOCTORS SET D_NAME='$name', CONTACT='$con',EMAIL='$email',DOB='$dob',ADDRES='$add'where DOCTOR_ID=$id ";

    if($mysqli->query($query)===true)
    {
         
            header('location:doctorProfile.php?msg=status updated successfully');
        
    }
    else{
        header('location:doctorProfile.php?msg=status not updated ');

}
}



?>