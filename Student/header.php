<?php 
session_start();
// if(!isset($_SESSION['userId']))
// {
//     header('location:index.php?msg= You have to login first');
// }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MNNIT Student Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">MNNIT Student</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
       
        

      <li class="nav-item dropdown pe-3">

 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <!-- <img width='20px' height='20px' src="" alt="Profile" src="<?php if(isset($_SESSION['userPic'])){echo $_SESSION['userPic'];}?>" class="rounded-circle"> -->
  <!-- <span class="d-none d-md-block dropdown-toggle ps-2"> <?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?>   </span> -->

              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            
</a> 

<!-- End Profile Iamge Icon -->
          
          <!-- End Profile Iamge Icon -->

        
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <main id="main" class="main">

    

    

  </main><!-- End #main -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="studentDashboaed.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>View Result</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="getRes1.php">
              <i class="bi bi-circle"></i><span>Transcript</span>
            </a>
          </li>
          <li>
            <a href="getRes.php">
              <i class="bi bi-circle"></i><span>CPI/SPI</span>
            </a>
          </li>

          
          </li>

          
        </ul>
      </li><!-- End Forms Nav -->




      


      <li class="nav-item">
        <a class="nav-link collapsed" href="getcourse.php">
          <i class="bi bi-circle"></i>
          <span>Course Of Current Semester</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      
      

      


    </ul>

  </aside><!-- End Sidebar-->