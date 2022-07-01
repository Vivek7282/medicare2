
<?php

require_once('config.php');
if(isset($_POST['updDept']))
{
   
    $name=$_POST['cname'];
   $id=$_POST['id'];


    $query="update DEPARTMENT set D_name='$name' where D_ID=$id ";
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:viewDepart.php?msg = Department updated Successfully');
        
    }
    else{ 

        header('location:viewDepart.php?msg= Department Not updated ');
    }

}






?>

<?php include ('header.php');?>


<div class="row">

<header>

Edit Department


</header>


        <div class="col-lg-12">

         

<form    class="form-horizontal" method="post" action="">
                <div class="row mb-3">
              
                  <label for="Department" class="col-sm-2 col-form-label">Department_Name</label>
                  

                  <?php
                  if(isset($_GET['id']))
                  {
                      &id=$_GET['id'];
                  
require_once('config.php');



    $query= "SELECT * FROM DEPARTMENT  where D_ID=$id" ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            ?>
<div class="col-sm-10">
                <input type="hidden" class="form-control"  name="id"value="<?php echo $row->D_ID; ?>" >
                    <input type="text" class="form-control"  name="cname"value="<?php echo $row->D_name; ?>" required>
                  </div>
                </div>
                <?php}}}?>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Update Department" name="updDept">Add_Department</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewDepart.php';" value="Cancel" />
 -->


                </div>
                
</form>

              
              </div>
              
              </div>
        </main>
              <?php include ('footer.php');?>