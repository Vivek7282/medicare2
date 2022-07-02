



<?php
session_start();
require_once('config.php');
//user login code
if(isset($_POST['addUser']))
{

    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $query= "SELECT * FROM USERS where email= '$email' and passwor='$pass' ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $_SESSION['userId'] = $row->USER_ID;
            $_SESSION['userName'] = $row->U_NAME;
            $_SESSION['usePic'] = $row->IMAGES; 
            $_SESSION['contact'] = $row->CONTACT;
            $_SESSION['email'] = $row->EMAIL; 
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


//Add ambulance


if(isset($_POST['addAmbu']))
{
   
    $name1=$_POST['cname'];
    $name2=$_POST['fnumber'];
    $name3=$_POST['anumber'];
   


    $query="INSERT INTO Ambulance(D_Nname,phone,A_number) VALUES ('$name1','$name2','$name3')";
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:addAmbulance.php?msg = Ambulance Added Successfully');
        
    }
    else{ 

        header('location:addAmbulance.php?msg= Ambulance Not added ');
    }

}





// Add User

if(isset($_POST['adduser']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $contact=$_POST['contact'];
   



if(isset($_FILES["photo"])&& $_FILES["photo"]["error"] == 0){
    $allowed =array("jpg"=> "image/jpg","jepg"=>"image/jepg","gif"=> "image/gif","png"=>"image/png");
    $filename=$_FILES["photo"]["name"];
    $filetype=$_FILES["photo"]["type"];
    $filesize=$_FILES["photo"]["size"];

$ext= pathinfo($filename, PATHINFO_EXTENSION);
if(!array_key_exists($ext,$allowed))die("Error:Please select a valid file format");

$maxsize=1*1024*1024;
if($filesize>$maxsize)die("Error: File size is larger than the upper limit");
if(in_array($filetype,$allowed)){
if(file_exists("userImages/" .$filename)){
echo $filename . "is already exists";}
else{
     $path="userImages/" .uniqid(). $filename;
$query="INSERT INTO USERS(U_NAME,EMAIL,CONTACT,PASSWOR,IMAGES) VALUES ('$fname','$email','$contact','$pass','$path')";

    if($mysqli->query($query)===true)
    {
        
            //   move_uploaded_files($_FILES["photo"]["tmp_name"], $path);
            header('location:addUser.php?msg=Data Added Successfully '); 
    }
    }
}
    else{
        header('location:addUser.php?msg = ERROR2 ');
    }
    // move_uploaded_file($_FILES["photo"]["tmp_name," ]);


}
else{
    echo "ERROR :There was a problem in uploading your file. Please try again";
}

}
else{
    echo "ERROR " .$_FILES["photo"]["error"];
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
    $allowed =array("jpg"=> "image/jpg","jepg"=>"image/jepg","gif"=> "image/gif","png"=>"image/png");
    $filename=$_FILES["photo"]["name"];
    $filetype=$_FILES["photo"]["type"];
    $filesize=$_FILES["photo"]["size"];

$ext= pathinfo($filename, PATHINFO_EXTENSION);
if(!array_key_exists($ext,$allowed))die("Error:Please select a valid file format");

$maxsize=1*1024*1024;
if($filesize>$maxsize)die("Error: File size is larger than the upper limit");
if(in_array($filetype,$allowed)){
if(file_exists("userImages/" .$filename)){
echo $filename . "is already exists";}
else{
     $path="userImages/" .uniqid(). $filename;
$query="INSERT INTO DOCTORS(D_NAME,EMAIL,CONTACT,passwor,ADDRES,DOB,pic,CITY_ID,D_ID) VALUES ('$name','$email','$contact','$pass','$add','$dob','$path',$city,$dept)";

    if($mysqli->query($query)===true)
    {
        
            //   move_uploaded_files($_FILES["photo"]['tmp_name'], $path);
            header('location:addDoc.php?msg=Data Added Successfully '); 
    }
    }
}
    else{
        header('location:addDoc.php?msg = ERROR1 ');
    }
    // move_uploaded_file($_FILES["photo"]["tmp_name," ]);


}
else{
    echo "ERROR :There was a problem in uploading your file. Please try again";
}

}
else{
    echo "ERROR " .$_FILES["photo"]["error"];
}




?>