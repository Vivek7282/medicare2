



<?php
session_start();
require_once('config.php');
//user login code
if(isset($_POST['addDoc']))
{

    $email=$_POST['email'];
  
    
    $query= "SELECT * FROM Patients where email= '$email'  ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $_SESSION['userId'] = $row->patient_id;
            $_SESSION['userName'] = $row->P_name;
            $_SESSION['email'] = $row->EMAIL;  
            $_SESSION['con'] = $row->CONTACT;   
            $_SESSION['d1_id'] = $row->DOCTOR;  
            $_SESSION['d_id'] = $row->DEPART;   
            $_SESSION['doa'] = $row->Date_of_App;     
            header('location:doctorDashboard.php');
        }
    }
    else{
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}
//update Paitents
if(isset($_POST['updPai']))
{

        $id=$_SESSION['userId'];
        $name=$_SESSION['name'];
        $doa=$_SESSION['doa'];
        $email=$_SESSION['email'];
        $con=$_SESSION['con'];
    
    
    $query= "UPDATE Patients SET P_name='$name', CONTACT='$con',EMAIL='$email',Dare_of_App='$doa' where patient_id=$id ";

    if($mysqli->query($query)===true)
    {
         
            header('location:patientProfile.php?msg=status updated successfully');
        
    }
    else{
        header('location:patientProfile.php?msg=status not updated ');

}
}



?>