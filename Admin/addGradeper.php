<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>

    Change Permission


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Change Permission</h5>

         <form    class="form-horizontal" method="post" action="function.php">




                <label for="type">Permission To Add Grade &emsp; &emsp;   &nbsp</label>
                    <select id="" name="gtype">
                             <option value="">Select Options</option>
                             <option value="NO">NO</option>
                             <option value="YES">YES</option>
                 
  
                    </select>
              
                    <div class="row mb-2">
              </div>




   


                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Grade" name="addgrade1">Add Grade Permission</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  


                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>