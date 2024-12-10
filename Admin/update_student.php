<!DOCTYPE html>
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
    $student=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM student WHERE ID='".$_GET['sid']."'"))
?>
<html lang="en">

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
    <div class="row">
      <div class="col-sm-2 well"></div>
      <div class="col-sm-8">
        <div class="card" style="border-style: solid; border-color:white;border-top-color: blue;">
            <div class="card-body">
              <h5 class="card-title" style="color: blue;">Update Student Registration Form</h5>

              <!-- Multi Columns Form -->
              <form class="row g-2" action="update_student.php?sid=<?php echo $student[0]?>" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text" value="<?php echo $student[2] ?>" class="form-control" id="inputName5" name="name">
                  <input type="hidden" class="form-control" value="<?php echo $student[0] ?>" id="inputName5" name="id">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">PRN No.</label>
                  <input type="number" value="<?php echo $student[3] ?>" class="form-control" name="prn" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Mobile No.</label>
                  <input type="number" value="<?php echo $student[4] ?>" class="form-control" name="contact" >
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Address</label>
                  <textarea cols="25" rows="2" class="form-control" name="address"><?php echo $student[5] ?></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Email</label>
                  <input type="email" class="form-control" value="<?php echo $student[6] ?>"  id="inputEmail5" name="mail">
                </div>
              
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" value="<?php echo $student[9] ?>" id="inputName5" name="dob">
                </div>
         
                <div class="text-center">
                  <button type="submit" class="btn btn-success" name="save">Submit</button>
                  <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

      </div>
    </div>

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
<?php
if (isset($_POST['save'])) 
{
  $fname=$_POST['name'];
  $prn=$_POST['prn'];
  $mobile=$_POST['contact'];
  $address=$_POST['address'];
  $email=$_POST['mail'];
  $department=$_POST['dept'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $id=$_POST['id'];

  
  if (mysqli_query($con,"UPDATE student SET Name='".$fname."', PRN='".$prn."', Mobile='".$mobile."', Address='".$address."', Email='".$email."', Dob='".$dob."' WHERE ID='".$id."'"))
  {
          echo "
          <script>
          alert('Record Updated Successfully....!');
          window.location.href='view_student.php';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='view_student.php';
          </script>
          ";
     } 
}

?>