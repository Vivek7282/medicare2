<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                RESULT
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Grade</th>
            <th><i class="icon_profile"></i>Credit</th>
</tr>

<?php
session_start();
require_once('config.php');

$spi=0;
$total_sub=0;
$PASS=1;
$toc=0;

    $query1= "SELECT * FROM Current_Sem " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
        
        if(isset($_POST['show']))
        {
           
            $reg=$_POST['reg'];
          
            
            $query= "SELECT * FROM Marks_Table where Reg_No= '$reg'  ";
        
            if($result= $mysqli->query($query))
            {
                //echo "1";
                while($row=$result->fetch_object())
                {
                    $_SESSION['reg'] = $row->Reg_No;
                    $d=$row->Reg_No;
        
        $query= "SELECT * FROM Marks_Table  where Semester='$sem' and Reg_No='$d' " ;

                }
            }
        }

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
         $total_sub++;
            ?>
            <tr>

    <td><?php echo $row->Course   ?> </td>

   <?php $marks= $row->TA+ $row->Mid_sem+ $row->End_sem + $row->Practical +$row->Internal; 
   $e=10;
   $toc+= $row->Credit ;
      
   ?>
  <?php
   $grade;
   if($marks>=85)
   {$grade='A+'; $spi=$spi + 10 * $row->Credit ;}
   else if($marks>=75)
   {$grade='A'; $spi=$spi + 9 * $row->Credit ;}
   else if($marks>=65)
   {$grade='B+'; $spi=$spi + 8 * $row->Credit ;}
   else if($marks>=55)
   {$grade='B'; $spi=$spi + 7 * $row->Credit ;}
   else if($marks>=45)
   {$grade='c'; $spi=$spi + 6 * $row->Credit ;}
   else if($marks>=35)
   {$grade='D'; $spi=$spi + 5 * $row->Credit ;}
   else if($marks>=30)
   {$grade='E'; $spi=$spi + 4 * $row->Credit ;$PASS=-1;}
   else 
   {$grade='F'; $spi=$spi + 3 * $row->Credit ;$PASS=0;}
   
   
   
   
   
   

   ?>
    <td><?php   echo $grade ?> </td>

    <td><?php echo $row->Credit   ?> </td>
    
    <td>





          
</div>
</td>
</tr>
<?php
        }
        



        
    }
    





?>
<tr>
            <th><i class="icon_profile"></i></th>
            
            
            <th><i class="icon_profile"></i>Spi</th>
            <th><?php echo  $spi/$toc   ?> </th>
           
</tr>
<tr>
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i></th>
            <th><?php    ?> </th>
           
</tr>
<tr>
    <!-- $status="FAIL"; -->
<?php  
if($PASS=1)
{$status="PASS";}
 else if($PASS=-1)
 {
$status= "You have supplementary examinations.";
               }
              
            
            ?> 
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i>RESULT STATUS</th>
            
            <th><?php echo  $status  ?> </th>
           
</tr>




<tbody>
</table>
</section>
</div>
</div>

</main>

<?php include('footer.php');?>