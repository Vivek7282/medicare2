

<?php include('header.php');?>






<main id="main" class="main">

<div class="row">

     <header>

    Practical Marks
   
    </header>
  


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">  Marks</h5>
            
   

         <form    class="form-horizontal" method="post" action="function.php">



         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Course ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="cid1" required>
              </div>
                </div>

         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Reg. Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="reg1" required>
              </div>
                </div>

                <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Semester</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="sem" required>
              </div>
                </div>

                <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Credit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="credit" required>
              </div>
                </div>


         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Teaching Assesment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="ta21" required>
              </div>
                </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Internals</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="inter" required>
              </div>
              </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Practicals</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="Practical" required>
              </div>
             </div>
             
   


             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Marks4" name="addMarks4">Add Marks</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











