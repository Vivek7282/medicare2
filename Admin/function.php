



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
   
    $name1=$_POST['cname'];
   


    $query="INSERT INTO CITIES(CITY_NAME) VALUES ('$name1')";
    
    
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



// Add Doctors


if(isset($_POST['addDoc']))
{
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $pass=$_POST['pass'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];
    $dept=$_POST['depart'];



if(isset($_FILES["photo"])&& $_FILES["photo"]["error"]==0){
    $allow =array("jpg"=> "image/jpg","jepg"=>"image/jepg","gif"=> "image/gif","png"=>"image/png");
    $filename=$FILES["photo"]['name'];
    $filetype=$FILES["photo"]['type'];
    $filesize=$FILES["photo"]['size'];
}
$ext= pathinfo($filename, PATHINFO_EXTENSION);
if(!array_key_exists($set,$allowed))die("Error:Please select a valid file format");

$maxsize=1*1024*1024;
if($filesize>$maxsize)die("Error: File size is larger than the upper limit");
if(in_array($filesize),$allowed);

if(file_exists("userImages/" .uniqid().$filename)){
echo $filename . "is already exists";}
else{
    $path="userImages/" . $filename;

}

$query="INSERT INTO DOCTORS(D_NAME,EMAIL,CONTACT,password,ADDRESS,D.O.B,PIC,CITY_ID,D_ID) 

VALUES($fname,$email,$contact,$pass,$add,$dob,$path,$city,$depart)"




   

    if($mysqli->query($query)===true)
    {
        
            move_uploaded_files($_FILES["photo"]["tmp_name"],"$path");
            header('location:addDoc.php?msg =Data Added Successfully '); 
        
    }
    else{
        header('location:addDoc.php?msg = ERROR ');
    }

}


?>