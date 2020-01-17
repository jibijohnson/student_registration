<?php

 include "header.php";
 include_once "../controllers/student_controller.php";
 include_once('../config/connection.php');
 $host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "studreg"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
 $connection = new PDO($dsn, $username, $password, $options);

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
    $con->update_data($Reg_no, $Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  }

 $sel  = "Select * from student where Email='jibijohnson96@gmail.com'";
            $statement = $connection->prepare($sel);
            $statement->execute();
            $result = $statement->fetchAll();
            if ($result && $statement->rowCount() > 0)
            {
            ?>
          <h2>EDIT</h2>
          
<?php       foreach ($result as $row) { ?>
<div class="row">
  <div class="login">
   <form action="" method="post">
    <h1>   Student Profile Edit </h1>
	 <input type="text"  name="	Reg_no" class="fld" value="<?php echo $row['Reg_no'];?>">
	<input type="text" name="Fname" class="fld" value="<?php echo $row['Fname'];?>">
	<input type="text" name="Lname" class="fld" value="<?php echo $row['Lname'];?>">
	<input type="text" name="Mobile" class="fld" value="<?php echo $row['Mobile'];?>">
	<select name="Dept_name" class="fld">
        <option value="<?php echo $row['Dept_name'];?>"> <?php echo $row['Dept_name'];?> </option>
		<option value="BCA" class="fld">BCA</option>					 
               <option value="MCA" class="fld">MCA</option>
               <option value="BTECH" class="fld">BTECH</option>	
			   <option value="MTECH" class="fld">MTECH</option>

    </select><br>
	<select name="Course_name" class="fld">
        <option value="<?php echo $row['Course_name'];?>"><?php echo $row['Course_name'];?> </option>
		 <option value="CSE" class="fld">CSE</option>					 
               <option value="EC" class="fld">EC</option>
               <option value="MECH" class="fld">MECH</option>	
			   <option value="CE" class="fld">CE</option>
    </select><br>
	<input type="text" name="Password" class="fld" value="<?php echo $row['Password'];?>">
	
	
	<input type="text" name="Email" class="fld" value="<?php echo $row['Email'];?>">
	<input type="text" name="Name" class="fld" value="<?php echo $row['Name'];?>">
	<select name="Sem_no" class="fld">
        <option value="<?php echo $row['Sem_no'];?>"><?php echo $row['Sem_no'];?></option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
       
        
    </select>
	
	<select name="Years" class="fld">
       <option value="<?php echo $row['Years'];?>"><?php echo $row['Years'];?></option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
       
	 
	<input type="submit" name="Update" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
 </div>
</div>

<?php } ?>
       
    <?php } else { ?>
        <blockquote>No results found.</blockquote>
    <?php } ?>