<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Enter Registration Number</h5>

         <form    class="form-horizontal" method="post" action="cpiSpi.php">




         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Registration Number</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="reg"required>
                  </div>
                </div>
              
                    <div class="row mb-2">
              </div>




   


                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Course" name="show">Show My SPI</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  


                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>