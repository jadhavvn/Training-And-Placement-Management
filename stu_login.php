<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<?php
$con=mysqli_connect("localhost","root","","tpo_db")or die("Database Error....!");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>CareerPoint</h1>
        
          <p>Login to Student Page</p>
        </div>
        <form action="stu_login.php" method="POST">
          <input type="text" name="uname" placeholder="Email or phone number" required>
          <input type="password" name="password" placeholder="Password" required>
          <div class="link">
            <button type="submit" class="login" name="save">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<?php
if(isset($_POST['save']))
{
    
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    
    $res=mysqli_query($con,"SELECT * FROM student WHERE PRN='".$pass."' && Email='".$uname."'");
    $row=mysqli_fetch_row($res);

  
   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['student']=$row[0];

    echo'
    <script>
        window.location.href="stu_index.php";
    </script>
    ';
    }
  
    
    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="stu_login.php";
    </script>
    ';
    }
}
?>
