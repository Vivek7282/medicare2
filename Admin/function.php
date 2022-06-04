



<?php
session_start();
require_once('config.php');
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
            header('location:adminDashboard.php');
        }
    }
    else{
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}

// add cities
if(isset($_POST['addCity']))
{
   
    $name=$_POST['cname'];
   


    $query="insert into  CITIES(CITY_NAME) values ('$name')";
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:addCiity.php?msg = City Added Successfully');
        
    }
    else{ 

        header('location:addCiity.php?msg= City Not added ');
    }

}


// Add Department

if(isset($_POST['addDept']))
{
    $name=$_POST['dname'];
   


    $query= "INSERT INTO DEPARTMENT (D_name) values ('$name') ";

    if($mysqli->query($query)===true)
    {
        
            header('location:addDeprt.php?msg = Department Added Successfully');
        
    }
    else{
        header('location:addDeprt.php?msg =Department Not Added ');
    }

}




?>