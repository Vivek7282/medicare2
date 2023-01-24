<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Change semester</h5>

         <form    class="form-horizontal" method="post" action="function.php">




         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Enter Prev Semester</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="psem"required>
                  </div>
                </div>
              
                    <div class="row mb-2">
              </div>

              <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Enter current Semester</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="csem"required>
                  </div>
                </div>
              
                    <div class="row mb-2">
              </div>



   


                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Course" name="change">Change Semester</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  


                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>