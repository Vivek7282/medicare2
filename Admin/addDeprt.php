<?php include ('header.php');?>
<main id="main" class="main">
<div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add_Department</h5>

<form     method='post' action ="function.php" >             >
                <div class="row mb-3">
              
                  <label for="dename" class="col-sm-2 col-form-label">Department_Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="dname" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Department" name="addDept">Add_Department</button>
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
          </main>

<?php include ('footer.php');?>