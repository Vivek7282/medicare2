<?php include ('header.php');?>
<main id="main" class="main">
<div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add_User</h5>

<form method="POST" action="function.php" enctype="multipart/form-data">
                <div class="row mb-3">
              
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText"name="fname" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email"required>
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="contact"required>
                  </div>
                </div>
                


                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name='photo' id="inputImage" required>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"name="pass" required>
                  </div>
                </div>
                
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add User" name="adduser">Add_User</button>
                  <?php
           if(isset($_GET['msg']))
            {
                 echo $_GET['msg'];
            }
              ?>
                  <button type="reset" class="btn btn-secondary">Reset</button>

                </div>
                
</form>

              
              </div>
              </div>
              </div>
          </main>
<?php include ('footer.php');?>
