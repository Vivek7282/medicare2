<?php include ('header.php');?>


<div class="row">

<header>

Add city


</header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add_City</h5>

<form    class="form-horizontal" method="post" action="function.php">
                <div class="row mb-3">
              
                  <label for="city" class="col-sm-2 col-form-label">City_Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="cname" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add City" name="addCity">Add_City</button>
                  <?php
if(isset($_GET['msg']))
{
    echo $_GET['msg'];
}
?>


                </div>
                
</form>

              
              </div>
              </div>
              </div>
              </div>
              <?php include ('footer.php');?>