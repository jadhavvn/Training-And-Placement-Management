<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error.....!"); 
$id=$_GET['id'];
if (mysqli_query($con,"DELETE FROM department WHERE ID='".$id."'")) 
	{
          echo "
          <script>
          alert('Department deleted Successfully....!');
          window.location.href='view_department.php';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='view_department.php';
          </script>
          ";
     }
?>