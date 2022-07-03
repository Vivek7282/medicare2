<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Ambulance_record
</header>
<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>




<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Driver Name</th>
            <th>Phone No.</th>
            <th>Ambulance No.</th>
</tr>

<?php
require_once('config.php');



    $query= "SELECT * FROM Ambulance " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->D_Nname   ?></td>
    <td><?php echo $row->phone   ?></td>
    <td><?php echo $row->A_number   ?></td>
    

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
