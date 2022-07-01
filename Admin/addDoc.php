<?php include ('header.php');?>
<main id="main" class="main">
<div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add_Doctor</h5>

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
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="address" class="form-control" id="inputaddress"name="add" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="contact"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Date_of_Birth</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name='dob' id="inputDob" required>
                  </div>
                </div>



                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name='photo' id="inputImage" required>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="city_name" class="col-sm-2 col-form-label">Select City</label>
                  <div class="col-sm-10">
                    <select name="city" calss="form-control">
                        <option>Select City</option>
                        <?php
                        require('config.php');
                        $query= "SELECT * FROM CITIES ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
     ?> 
     <option value ="<?php echo  $row-> CITY_ID;?> "><?php echo  $row-> CITY_NAME;?></option>

        <?php
        }
    }
                    ?>
                     </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Department_name" class="col-sm-2 col-form-label">Select Department</label>
                  <div class="col-sm-10">
                    <select name="depart" calss="form-control">
                        <option>Select Department</option>
                        <?php
                        require('config.php');
                        $query= "SELECT * FROM DEPARTMENT ";

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
     ?> 
     <option value ="<?php echo  $row-> D_ID;?> "><?php echo  $row-> D_name;?></option>

        <?php
        }
    }
                    ?>
                    </select>
                  </div>
                </div>

                


                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"name="pass" required>
                  </div>
                </div>
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Active
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                       Offline
                      </label>
                    </div>
                   
                  </div>
                </fieldset> -->
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Doctor" name="addDoc">Add_Doctor</button>
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