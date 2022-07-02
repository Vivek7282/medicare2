<?php 
session_start();
if(!isset($_SESSION['userId']))
{
    echo '1';
    header('location:index.php?msg= You have to login first');
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mediare Admin panel</title>
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
        <span class="d-none d-lg-block">MedicareAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
       
        

      <li class="nav-item dropdown pe-3">

 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <img width='20px' height='20px' src="" alt="Profile" src="<?php if(isset($_SESSION['userPic'])){echo $_SESSION['userPic'];}?>" class="rounded-circle">
  <span class="d-none d-md-block dropdown-toggle ps-2"> <?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?>   </span>
</a> 

<!-- End Profile Iamge Icon -->
          
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php  if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}  ?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="adminProfile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  
  <main id="main" class="main">

    

<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Messsages for Admin
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>User_name</th>
            <th>Options</th>
</tr>

<?php
require_once('config.php');



    $query= "SELECT * FROM Information " ;

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            

            ?>
            <tr>

    <td><?php echo $row->A_Name   ?></td>
    <td>
           <input type="button"class ="btn btn-primary" onclick="location.href='function.php';" value="View" />
            
            <input type="button"class ="btn btn-danger" onclick="location.href='function.php?cid=<?php echo $row->A_Name;?>';" value="Remove" />


            <!-- <a class ="btn btn-success" herf="editcity.php?id=<?php echo $row->D_ID;?>"><i class="icon_check_alt2">Edit</i></a>
          
            <a class ="btn btn-danger" herf="function.php?cid=<?php echo $row->D_ID;?>"><i class="icon_close_alt2">Remove</i></a>
           -->
</div>
</td>
</tr>
<?php
        }
    }
    





?>



<tbody>
</table>
</section>
</div>
</div>






    

  </main><!-- End #main -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Doctors</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addDoc.php">
              <i class="bi bi-circle"></i><span>Add Doctors</span>
            </a>
          </li>
          <li>
            <a href="viewDoc.php">
              <i class="bi bi-circle"></i><span>View Doctors</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Cities</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addCiity.php">
              <i class="bi bi-circle"></i><span>Add Cities</span>
            </a>
          </li>
          <li>
            <a href="viewCitie.php">
              <i class="bi bi-circle"></i><span>View Cities</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Ambulance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addAmbulance.php">
              <i class="bi bi-circle"></i><span>Add Ambulance</span>
            </a>
          </li>
          <li>
            <a href="viewAmbulance.php">
              <i class="bi bi-circle"></i><span>View Ambulance</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Departments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addDeprt.php">
              <i class="bi bi-circle"></i><span>Add Departments</span>
            </a>
          </li>
          <li>
            <a href="viewDepart.php">
              <i class="bi bi-circle"></i><span>View Departments</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Patients</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
            <a href="viewPaitent.php">
              <i class="bi bi-circle"></i><span>View Patients</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

<!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Departments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <a href="viewDepart.php">
              <i class="bi bi-circle"></i><span>View Departments</span>
            </a>
          </li>
          </li>
        </ul>
      </li> -->
      <!-- End Forms Nav -->


      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Dieases</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addDS.php">
              <i class="bi bi-circle"></i><span>Add Dieases</span>
            </a>
          </li>
          <li>
            <a href="viewDS.php">
              <i class="bi bi-circle"></i><span>View Dieases</span>
            </a>
          </li>
          </li>
        </ul> 
       </li> -->
      <!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="addUser.php">
              <i class="bi bi-circle"></i><span>Add Users</span>
            </a>
          </li>
          <li>
            <a href="viewUser.php">
              <i class="bi bi-circle"></i><span>View Users</span>
            </a>
          </li>
          </li>
        </ul>
      </li><!-- End Forms Nav -->






      
      
      

      

      <!-- <li class="nav-item">
        <a class="nav-link " href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->
      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->