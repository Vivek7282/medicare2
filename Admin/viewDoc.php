<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Doctors_Record
</header>

<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>




<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Doctor_Name</th>
            <th><i class="icon_profile"></i>Address</th>
            <th><i class="icon_profile"></i>Department</th>
            <th><i class="icon_profile"></i>City</th>
            <th><i class="icon_profile"></i>Email</th>
            <th><i class="icon_profile"></i>Contact</th>
</tr>

<?php
require_once('config.php');



    $query= "SELECT * FROM DOCTORS " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->D_NAME   ?> </td>

    <td><?php echo $row->ADDRES   ?> </td>

    <td><?php echo $row->D_ID   ?> </td>
    <td><?php echo $row->CITY_ID   ?> </td>
    <td><?php echo $row->EMAIL   ?> </td>
    <td><?php echo $row->CONTACT   ?> </td>
    <td>





          
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
</main>


<?php include('footer.php');?>