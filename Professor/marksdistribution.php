

<?php include('header.php');?>






<main id="main" class="main">

<div class="row">

     <header>

    Theoritical
   
    </header>
  


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">  Marks Distribution theoretical</h5>
            
   

         <form    class="form-horizontal" method="post" action="function.php">



         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">User ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="id" required>
              </div>
                </div>

         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Course Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="cname" required>
              </div>
                </div>

                <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Program</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="program" required>
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
                <input type="text" class="form-control"  name="ta1" required>
              </div>
                </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Mid Sem</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="mid" required>
              </div>
              </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">End Sem</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="end" required>
              </div>
             </div>
             
   


             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Marks1" name="addMarks1">Add Marks</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" />
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











