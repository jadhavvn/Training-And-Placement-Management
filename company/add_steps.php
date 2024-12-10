<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error....!");
session_start();
    if(isset($_SESSION['company']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../admin/../index.php";
        </script>
        ';
    }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Training And Placement Cell</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../admin/assets/img/logo_clg.png" rel="icon">
  <link href="../admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="../admin/https://fonts.gstatic.com" rel="preconnect">
  <link href="../admin/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../admin/assets/css/style.css" rel="stylesheet">

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
     
      <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
                <div class="card"  style="border-style: solid; border-color:white;border-top-color: blue;">
                    <div class="card-body">
                         <h5 class="card-title" style="color: blue;">Add Job Steps</h5>

                         <!-- Multi Columns Form -->
                         <form class="row g-3" action="add_steps.php" method="POST">
                              <div class="col-12">
                                  <label for="inputAddress5" class="form-label">Add Steps</label>
                                  <textarea cols="40" rows="2" class="form-control" name="steps"></textarea>
                              </div>
                              <div class="text-center">
                                   <button type="submit" class="btn btn-success" name="ok">Submit</button>
                                   <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
                              </div>
                         </form>
                         <!-- End Multi Columns Form -->
                    </div>
               </div>
           </div>
      </div>

  </main><!-- End #main -->
<br><br><br><br><br><br>
  <!-- ======= Footer ======= -->
  <?php
  include('footer.php');
  ?>

  <a href="../admin/#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../admin/assets/vendor/quill/quill.min.js"></script>
  <script src="../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../admin/assets/js/main.js"></script>

</body>

</html>
<?php
if(isset($_POST['ok']))
{
     $steps=$_POST['steps'];
     
     if(mysqli_query($con,"INSERT INTO job_steps VALUES('','".$steps."','".$_SESSION['company']."')"))
     {
          echo "
          <script>
          alert('Job Steps Added Successfully!');
          window.location.href='add_steps.php';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='add_steps.php';
          </script>
          ";
     }
}