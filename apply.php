<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error....!");

     if(mysqli_query($con,"INSERT INTO job_application VALUES('',now(),'".$_GET['stu']."','".$_GET['jid']."','0')"))
     {
          echo "
          <script>
          alert('Application Sent Successfully....!');
          window.location.href='job.php?cid='+'".$_GET['cid']."';
          </script>
          ";
     }
     else
     {
          echo "
          <script>
          alert('Please Try Again');
          window.location.href='job.php?cid='+'".$_GET['cid']."';
          </script>
          ";
     }



?>