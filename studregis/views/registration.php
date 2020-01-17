<?php
 //
 //
  include "header.php";
  include_once "../controllers/student_controller.php";

  if(isset($_POST['submit'])){
    $Reg_no=$_POST['Reg_no'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Mobile=$_POST['Mobile'];
	$Dept_name=$_POST['Dept_name'];
	$Course_name=$_POST['Course_name'];
	$Password=$_POST['Password'];

    $Email=$_POST['Email'];
    $Name=$_POST['Name'];
    $Sem_no=$_POST['Sem_no'];
    $Years=$_POST['Years'];
    
    
        $con=new student_controller();
    $con->save_data($Reg_no, $Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  }
?>
<div class="row">
  <div class="login" style="text-align: center;">
   <form action="" method="post">
    <h1>   Student Registration </h1>
	Reg_no:	 <input type="text"  name="Reg_no" class="fld"><br><br>
	First Name:	 <input type="text"  name="Fname" class="fld"><br><br>
Last Name:	 <input type="text"  name="Lname" class="fld"><br><br>
mobile no:	 <input type="text"  name="Mobile"   class="fld"><br><br>
Dept Name:	 <select name="Dept_name" class="fld">
	           <option value="BCA" class="fld">BCA</option>					 
               <option value="MCA" class="fld">MCA</option>
               <option value="BTECH" class="fld">BTECH</option>	
			   <option value="MTECH" class="fld">MTECH</option>
</select><br><br>
Course Name: <select name="Course_name" class="fld">
	           <option value="CSE" class="fld">CSE</option>					 
               <option value="EC" class="fld">EC</option>
               <option value="MECH" class="fld">MECH</option>	
			   <option value="CE" class="fld">CE</option>
</select><br><br>
Password:	 <input type="password"  name="Password"  class="fld"><br><br>
Email:	 <input type="email"  name="Email"  class="fld"><br><br>
Username:	 <input type="text"  name="Name"   class="fld"><br><br>

Sem_no:	 <select name="Sem_no" class="fld">
	           <option value="1" class="fld">1</option>					 
               <option value="2" class="fld">2</option>
               <option value="3" class="fld">3</option>	
			   <option value="4" class="fld">4</option>
</select><br><br> 

Years:	<select name="Years" class="fld">
	           <option value="1" class="fld">1</option>					 
               <option value="2" class="fld">2</option>
               <option value="3" class="fld">3</option>	
			   <option value="4" class="fld">4</option>
</select><br><br> 

	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
 </div>
</div>



<?php
   include "footer.php";
?>
