<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Courses
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Course Name</th>
            <th><i class="icon_profile"></i>Category</th>
</tr>

<?php
session_start();
require_once('config.php');


    $query1= "SELECT * FROM Current_Sem " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
        $query= "SELECT * FROM Marks_Distribution  where Semester='$sem'  " ; 
       
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
         
            ?>
            <tr>

    <td><?php echo $row->Course   ?> </td>
    <td><?php echo $row->category   ?> </td>
   
    
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