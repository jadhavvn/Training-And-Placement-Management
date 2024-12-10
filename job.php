<!DOCTYPE html>

<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error....!");
session_start();
    if(isset($_SESSION['student']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="index.php";
        </script>
        ';
    }
 $sname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM company WHERE ID='".$_GET['cid']."'"));

?>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Wallet - Payday Loan Service Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="plugins/font-awesome/solid.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
		function get_apply(jid,sid,cid)
		{

			var a=confirm("Do you realy want to apply for this post");
			if(a==true)
			{
				window.location.href='apply.php?'+'jid='+jid+'&stu='+sid+'&cid='+cid;
			}


		}
	</script>
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
				<!-- account btn --> <a href="stu_index.php" class="btn btn-primary ms-2 ms-lg-3">Home</a>
				<!-- account btn --> <a href="Admin/signout.php" class="btn btn-primary ms-2 ms-lg-3">Sign Out</a>
			</div>


		</div>
	</nav>
</header>
<!-- /navigation -->



<section class="page-header" style="background-image: url('admin/<?php echo $sname[1]?>');" >
	<div class="container" >
		<div class="row" >
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize">Welcome to</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					</li>
					<li class="list-inline-item"><a href="#"><?php echo $sname[2]?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
</section>

<section class="section">
	<div class="container">
			<div class="row">
			<h4 style="color:blue">Steps To Apply</h4>
			 <?php
                  $sr=1;
                  $res=mysqli_query($con,"SELECT * FROM job_steps WHERE COM_ID='".$_GET['cid']."'");
                   while($row=mysqli_fetch_row($res))
                  {
                      echo'<p><b >Step '.$sr.'.</b> &nbsp;'.$row[1].'</p>';
                      $sr++;
        }
        ?>
		</div>
		<hr>
		<div class="row">


			 <div class="col-lg-12">

									 	<?php
									 		$ja=mysqli_query($con,"SELECT * FROM job WHERE COM_ID='".$_GET['cid']."'");
									 		while($jobs=mysqli_fetch_row($ja))
									 		{
						 $dname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM department WHERE ID='".$jobs[1]."'"));
						 $sdata=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM student WHERE ID='".$_SESSION['student']."'"));
						 	if($sdata[7]==$dname[0])
						 	{

									 	echo'
						        <div class="mb-5">
						          <h2 class="mb-4">'.$jobs[4].'</h2>
						          <span>Opening From - '.$jobs[5].' <span class="mx-2">/</span> </span>
						          <span>Salary - '.$jobs[6].' <span class="mx-2"></span> </span>
						         
						          <p class="list-inline-item">
						          </p>
						        </div>
						      
						        <div class="content">
						          <p >'.$jobs[2].'</p>
						          
						          
						          
						        </div>

						        <button class="btn btn-warning" onclick="get_apply('.$jobs[0].','.$_SESSION['student'].','.$_GET['cid'].')">Apply Now</button>
						          <hr>

						        ';
									 		}
						 	}

						        ?>


      </div>
			
		</div>
	</div>
</section>

<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Personal loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Home Equity Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Student Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Mortgage Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Payday Loans</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">About</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">Benefits</a>
						</li>
						<li class="mb-2"><a href="#!">Careers</a>
						</li>
						<li class="mb-2"><a href="#!">Our Story</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Help</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="contact.html">Contact Us</a>
						</li>
						<li class="mb-2"><a href="faq.html">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 newsletter-form">
				<div style="background-color: #F4F4F4; padding: 35px;">
					<h5 class="mb-4 text-primary font-secondary">Subscribe</h5>
					<div class="pe-0 pe-xl-5">
						<form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank">
							<div class="input-group mb-3">
								<input type="text" class="form-control shadow-none bg-white border-end-0" placeholder="Email address"> <span class="input-group-text border-0 p-0">
                    <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                      aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                  </span>
							</div>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
							</div>
						</form>
					</div>
					<p class="mb-0">Lorem ipsum dolor sit amet, rdghds consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-5 text-center text-md-start">
			<div class="col-lg-4">
        <a href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="images/logo.png" alt="Wallet">
        </a>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-center">
					<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
					</li>
					<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
				<ul class="list-unstyled list-inline mb-0 social-icons">
					<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/scrollmenu/scrollmenu.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>