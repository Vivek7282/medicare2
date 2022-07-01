
<?php

require_once('config.php');
if(isset($_POST['updCity']))
{
   
    $name=$_POST['cname'];
   $id=$_POST['id'];


    $query="update CITIES set CITY_NAME='$name' where CITY_ID=$id ";
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:viewCitie.php?msg = City updated Successfully');
        
    }
    else{ 

        header('location:viewCitie.php?msg= City Not updated ');
    }

}






?>

<?php include ('header.php');?>


<div class="row">

<header>

Edit city


</header>


        <div class="col-lg-12">

         

<form    class="form-horizontal" method="post" action="">
                <div class="row mb-3">
              
                  <label for="city" class="col-sm-2 col-form-label">City_Name</label>
                  

                  <?php
                  if(isset($_GET['id']))
                  {
                      &id=$_GET['id'];
                  
require_once('config.php');



    $query= "SELECT * FROM CITIES  where CITY_ID=$id" ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            ?>
<div class="col-sm-10">
                <input type="hidden" class="form-control"  name="id"value="<?php echo $row->CITY_ID; ?>" >
                    <input type="text" class="form-control"  name="cname"value="<?php echo $row->CITY_NAME; ?>" required>
                  </div>
                </div>
                <?php}}}?>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Update City" name="updCity">Add_City</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewCitie.php';" value="Cancel" />
 -->


                </div>
                
</form>

              
              </div>
              
              </div>
              <?php include ('footer.php');?>