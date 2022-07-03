<?php include ('header.php');?>
<main id="main" class="main">

<div class="row">

<header>
Add Ambulance
</header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Ambulance</h5>

<form    class="form-horizontal" method="post" action="function.php">
                <div class="row mb-3">
              
                  <label for="city" class="col-sm-2 col-form-label">Driver name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="cname" required>
                  </div>
                </div>
                <div class="row mb-3">
              
                  <label for="city" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="fnumber" required>
                  </div>
                </div>

                <div class="row mb-3">
              
                  <label for="city" class="col-sm-2 col-form-label">Ambulance Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="anumber" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Ambulance" name="addAmbu">Add Ambulance</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewAmbulance.php';" value="List_of_Ambulance" />
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
</main>
              <?php include ('footer.php');?>
