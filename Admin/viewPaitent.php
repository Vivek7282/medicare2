<?php include('header.php');?>

<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Patient_Record
</header>

<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>




<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Patient_Name</th>
            <th><i class="icon_profile"></i>Doctor</th>
            <th><i class="icon_profile"></i>Department</th>
            <th><i class="icon_profile"></i>Date</th>
            <th><i class="icon_profile"></i>Contact</th>
</tr>

<?php
require_once('config.php');



    $query= "SELECT * FROM Patients " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->P_name   ?> </td>

    <td><?php echo $row->DOCTOR   ?> </td>

    <td><?php echo $row->DEPART   ?> </td>

    <td><?php echo $row->Date_of_App   ?> </td>
    <td><?php echo $row->CONTACT   ?> </td>
    <td>





           <!-- <input type="button"class ="btn btn-primary" onclick="location.href='addCiity.php';" value="Add" /> -->
            <!-- <a class ="btn btn-primary" onclick="addCiity.php"><i class="icon_plus_alt2">Add</i></a> -->
            <!-- <input type="button"class ="btn btn-success" onclick="location.href='editcity.php?id=<?php echo $row->CITY_ID;?>';" value="Edit" /> -->
            <!-- <input type="button"class ="btn btn-danger" onclick="location.href='function.php?cid=<?php echo $row->CITY_ID;?>';" value="Remove" /> -->


            <!-- <a class ="btn btn-success" herf="editcity.php?id=<?php echo $row->CITY_ID;?>"><i class="icon_check_alt2">Edit</i></a>
          
            <a class ="btn btn-danger" herf="function.php?cid=<?php echo $row->CITY_ID;?>"><i class="icon_close_alt2">Remove</i></a>
           -->
</div>
</td>
</tr>
<?php
        }
    }
    





?>



<tbody>
</table>
</section>
</div>
</div>



<?php include('footer.php');?>
