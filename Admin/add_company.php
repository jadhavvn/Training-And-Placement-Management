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
              <h5 class="card-title" style="color: blue;">Add New Company</h5>

              <!-- Multi Columns Form -->
              <form class="row g-2" action="add_company.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Company Name</label>
                  <input type="text" class="form-control" id="inputName5" name="cname">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">MD Name:</label>
                  <input type="text" class="form-control" name="mdname" >
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Established In</label>
                  <input type="date" class="form-control" id="inputAddres5s" name="est">
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Address</label>
                  <textarea cols="25" rows="2" class="form-control" name="address"></textarea>
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Work Information</label>
                  <input type="text" class="form-control" id="inputAddres5s" name="work">
                </div>
                <div class="col-6">
                  <label for="inputAddress5" class="form-label">Company Image </label>
                  <input type="file" class="form-control" id="inputAddres5s" name="image">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputName5" name="mail">
                </div>
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">Contact</label>
                  <input type="number" class="form-control" id="inputZip" name="contact">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Username</label>
                  <input type="text" class="form-control" id="inputName5" name="uname">
                </div>
                <div class="col-md-6">
                  <label for="inputZip" class="form-label">password</label>
                  <input type="password" class="form-control" id="inputPassword5" name="pass">
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-success" name="save">Submit</button>
                  <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
                </div>
              </form><!-- End Multi Columns Form -->

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
  $company=$_POST['cname'];
  $md_name=$_POST['mdname'];
  $establish=$_POST['est'];
  $address=$_POST['address'];
  $workinfo=$_POST['work'];
  
  $email=$_POST['mail'];
  $contact=$_POST['contact'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];

  // $max_id=1;
 $max1=mysqli_query($con,"select MAX(ID) from company");
 $max=mysqli_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 
        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file');          
            </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_company."."png";//name of file name to be saved
                echo$targetfile='uploadimg/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');
                    </script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);// code img code


  if (mysqli_query($con,"INSERT INTO company VALUES('','".$targetfile."','".$company."','".$md_name."','".$establish."','".$address."','".$workinfo."','".$email."','".$contact."','".$uname."','".$pass."')"))
  {
          echo "
          <script>
          alert('New Company added Successfully....!');
          window.location.href='add_company.php';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='add_company.php';
          </script>
          ";
     } 
    
  

}
}
}
}
?>