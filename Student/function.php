



<?php
session_start();

require_once('config.php');
//user login code
if(isset($_POST['addDoc']))
{
   
    $email=$_POST['email'];
  
    
    $query= "SELECT * FROM student where EMAIL= '$email'  ";

    if($result= $mysqli->query($query))
    {
        //echo "1";
        while($row=$result->fetch_object())
        {
            
            $_SESSION['userId'] = $row->Student_id;
            $_SESSION['program'] = $row->Program;
            $_SESSION['userName'] = $row->P_name;
            $_SESSION['pName'] = $row->Parent_Name;
            $_SESSION['email'] = $row->EMAIL;  
            $_SESSION['con'] = $row->CONTACT;     
            $_SESSION['dName'] = $row->DEPART;   
            $_SESSION['doa'] = $row->Date_of_birth;   
            $_SESSION['gender'] = $row->Gender;   
            $_SESSION['pic'] = $row->Profile_Image;   
            
            header('location:studentDashboaed.php');
        }
        header('location:studentDashboaed.php');
        //echo "90";
    }
    else{
        echo "3";
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}



if(isset($_POST['addstu']))
{
         
            header('location:addstudent.php');
        
   
}










//update Paitents
if(isset($_POST['updPai']))
{

        $id=$_SESSION['userId'];
        $name=$_SESSION['name'];
        $doa=$_SESSION['doa'];
        $email=$_SESSION['email'];
        $con=$_SESSION['con'];
    
    
    $query= "UPDATE student SET P_name='$name', CONTACT='$con',EMAIL='$email',Dare_of_birth='$doa' where student_id=$id ";

    if($mysqli->query($query)===true)
    {
         
            header('location:studentProfile.php?msg=status updated successfully');
        
    }
    else{
        header('location:studentProfile.php?msg=status not updated ');

}
}



?>