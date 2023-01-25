<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Professors Who Have Not Entered Marks 
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Professor Id</th>
            <th><i class="icon_profile"></i>Course</th>
           
</tr>

<?php
session_start();
require_once('config.php');



    $query1= "SELECT * FROM Marks_Distribution " ;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
             $course1=$row->Course;
            //  echo $row->Course; 
             $prop_id=$row->Professor_Id;
           
             
             $result= mysql_query("SELECT *  FROM Marks_Table where Course='$course1' ") ;
            //  $count=mysql_num_rows($result);
            //  echo $count;
            if($count!=2){
                echo $count;
                ?>
                <tr>
                 <th><?php echo $prop_id   ?> </th>
                <th><?php echo $course1  ?> </th>
            </tr>
                <?php
            }
             
 
          

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