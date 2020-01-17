<?php
  include "header.php";
  include_once "../controllers/student_controller.php";
  include('../config/connection.php');
  $conn = new PDO($dsn, $username, $password, $options);
  if(isset($_POST['submit'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $conn=new student_controller();
    $conn->login_data($Email,$Password);
  }
?>
<div class="row">
   <div class="login">
   <form action="" method="post">
    <h1>   Login </h1>
	EMAIL:<input type="text" name="Email" class="fld" ><br><br>
	PASSWORD:<input type="text" name="Password" class="fld"><br>
	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
</div>
</div>
<?php 
   include "footer.php";
?>