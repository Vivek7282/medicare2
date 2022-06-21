



<?php
session_start();
require_once('config.php');
//patients appointment
if(isset($_POST['appoint']))
{
    echo "vivek";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $doctor=$_POST['doctor'];
    $dept=$_POST['depart'];
   


    $query="INSERT INTO Patients(P_name,DEPART,EMAIL,CONTACT,DOCTOR,Date_of_App) VALUES ('$name',$dept,'$email','$phone',$doctor,'$date')";
    
        if($mysqli->query($query)===true)
        {
            
                //   move_uploaded_files($_FILES["photo"]['tmp_name'], $path);
                header('location:index.php?msg=Appointment Booked successfully '); 
        }
    
    
        else{
            header('location:index.php?msg = ERROR1 ');
        }
        // move_uploaded_file($_FILES["photo"]["tmp_name," ]);
    
    
    
    }
    


?>
