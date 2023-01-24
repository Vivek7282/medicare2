<?php include('header.php');?>



<body>

  

  <main id="main" class="main">

    



    <?php include('header.php')?>
   <?php session_destroy();?>
   <?php 
session_start();
require_once('config.php');
// $id=$_SESSION['userId'];

?> 

    
    
   
<div class="pagetitle">
  <h1> Profile</h1>
</div>
    
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?></h2>
              <h2><?php  if(isset($_SESSION['program'])){echo $_SESSION['program'];}  ?></h2>
              <h3>Student</h3>
              <!-- <h3>Student</h3> -->
              
            
            </div>
          </div>
         
        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <!-- <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li> -->

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"></p>

                  <h5 class="card-title">Profile Details</h5>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Reg. Number</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['userId'])){echo $_SESSION['userId'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Program</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['program'])){echo $_SESSION['program'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Parents Name</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['pName'])){echo $_SESSION['pName'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Department</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['dName'])){echo $_SESSION['dName'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"> <?php  if(isset($_SESSION['email'])){echo $_SESSION['email'];}  ?> </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['con'])){echo $_SESSION['con'];}  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['doa'])){echo $_SESSION['doa'];}  ?></div>
                  </div>




                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Gender</div>
                    <div class="col-lg-9 col-md-8"><?php  if(isset($_SESSION['gender'])){echo $_SESSION['gender'];}  ?></div>
                  </div>

                

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="function.php" method="POST">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="<?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?>">
                      </div>
                    </div>

                   

                    

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="Job" value="<?php  if(isset($_SESSION['email'])){echo $_SESSION['email'];}  ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="con" type="text" class="form-control" id="Country" value="<?php  if(isset($_SESSION['con'])){echo $_SESSION['con'];}  ?>">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Date of Appointment</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="doa" type="text" class="form-control" id="Address" value="<?php  if(isset($_SESSION['doa'])){echo $_SESSION['doa'];}  ?>">
                      </div>
                    </div>

                    -->
                   

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="updPai">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                 

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

<?php include('footer.php');?>


