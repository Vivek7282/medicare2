<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>

    Add Courses


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Courses</h5>

         <form    class="form-horizontal" method="post" action="function.php">




                <label for="type">Type Of Course &emsp; &emsp;   &nbsp</label>
                    <select id="" name="ctype">
                             <option value="">Select Options</option>
                             <option value="Practical">Practical</option>
                             <option value="Theory">Theory</option>
                 
  
                    </select>
              
                    <div class="row mb-2">
              </div>




   


                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Course" name="addCourses">Add Course</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" />
                  


                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>