<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error.....!"); 
$id=$_GET['id'];
if (mysqli_query($con,"DELETE FROM job WHERE ID='".$id."'")) 
	{
          echo "
          <script>
          alert('Job  deleted Successfully....!');
          window.location.href='view_steps.php';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='view_job.php';
          </script>
          ";
     }
?>