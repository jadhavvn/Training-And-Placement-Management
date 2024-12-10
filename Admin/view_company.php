<!DOCTYPE html>
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error....!");
session_start();
    if(isset($_SESSION['admin']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../admin_login.php";
        </script>
        ';
    }
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Training And Placement Cell</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_clg.png" rel="icon">
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
    include('header.php');
  ?>

  <!-- ======= Sidebar ======= -->
  <?php
    include('sidebar.php');
  ?>

  <main id="main" class="main">
    <section class="section">
      
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" style="box-shadow: 2px 10px 10px 10px gray;">
              <h5 class="card-title" style="color: blue;font-size: 25px">Company Details</h5>
              
              <div class="table table-responsive">
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">MD Name</th>
                    <th scope="col">Established In</th>
                    <th scope="col">Address</th>
                    <th scope="col">Work Info.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    
                    <th style="text-align: center;" >Update</th>
                    <th style="text-align: center;" >Remove</th>              
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sr=1;
                  $res=mysqli_query($con,"SELECT * FROM company");
                   while($row=mysqli_fetch_row($res))
                  {
                      echo'<tr>
                      <td>'.$sr.'</td>
                      <td>
                      <img src ="'.$row[1].'" style="height:100px; width=100px">
                      </td>
                      <td>'.$row[2].'</td>
                      <td>'.$row[3].'</td>
                      <td>'.$row[4].'</td>
                      <td>'.$row[5].'</td>
                      <td>'.$row[6].'</td>
                      <td>'.$row[7].'</td>
                      <td>'.$row[8].'</td>
                      <td>'.$row[9].'</td>
                      <td>'.$row[10].'</td>
                      
                      <td>
                      <a href="update_company.php?id='.$row[0].'">
                        <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
                          
                      </a>
                      </td>

                      <td>

                      <a href="delete_company.php?id='.$row[0].'">
                        <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                      </td>   
                     
                      </tr>';
                      $sr++;
                    }
                    ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('footer.php');
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
