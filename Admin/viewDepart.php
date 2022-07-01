<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Department_Record
</header>

<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>




<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Departnment_Name</th>
            <th>Options</th>
</tr>

<?php
require_once('config.php');



    $query= "SELECT * FROM DEPARTMENT " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->D_name   ?></td>
    <td>
           <input type="button"class ="btn btn-primary" onclick="location.href='addDeprt.php';" value="Add" />
            <!-- <a class ="btn btn-primary" onclick="addCiity.php"><i class="icon_plus_alt2">Add</i></a> -->
            <input type="button"class ="btn btn-success" onclick="location.href='editDepart.php?id=<?php echo $row->D_ID;?>';" value="Edit" />
            <input type="button"class ="btn btn-danger" onclick="location.href='function.php?cid=<?php echo $row->D_ID;?>';" value="Remove" />


            <!-- <a class ="btn btn-success" herf="editcity.php?id=<?php echo $row->D_ID;?>"><i class="icon_check_alt2">Edit</i></a>
          
            <a class ="btn btn-danger" herf="function.php?cid=<?php echo $row->D_ID;?>"><i class="icon_close_alt2">Remove</i></a>
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
</main>


<?php include('footer.php');?>