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
     
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"style="box-shadow: 2px 10px 10px 10px gray;">
              <h5 class="card-title"style="color: blue;font-size: 25px">Student Application</h5>
              
              <div class="table table-responsive">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Steps</th>
                      <th style="text-align: center;" >Update</th>
                      <th style="text-align: center;" >Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sr_no=1;
                    $res=mysqli_query($con,"SELECT * FROM job_steps WHERE COM_ID='".$_SESSION['company']."'");
                   while($row=mysqli_fetch_row($res))
                  {
                      echo'<tr>
                      <td>'.$sr_no.'</td>
                      <td>'.$row[1].'</td>
                      <td>

                      <a href="#">
                        <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>                        
                      </a>
                      </td>
                      <td>
                      <a href="delete_steps.php?id='.$row[0].'">
                        <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                      </a>
                      </td>   
                     
                      </tr>';
                      $sr_no++;
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
