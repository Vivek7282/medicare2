<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Message
</header>

<?php
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>




<table class="table table-striped table-advance table-hove">
    <tbody>
        <!-- <tr>
            <th><i class="icon_profile"></i>City_Name</th>
            <th>Options</th>
</tr> -->

<?php
require_once('config.php');



    $query= "SELECT * FROM Information " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->Info  ?></td>
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