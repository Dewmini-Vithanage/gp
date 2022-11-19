<?php
include 'connect.php';               
if(isset($_POST['submit'])){       
    $empname=$_POST['empname'];  
    $dob=$_POST['dob'];   
    $contact=$_POST['contact']; 
    $add=$_POST['add'];       
    $sal=$_POST['sal'];          
    $mail=$_POST['mail'];

    $sql="insert into employee (employee_name,dob,contact_no,address,salary,email) values('$empname','$dob','$contact','$add','$sal','$mail')";            //sql query to add those variables into the table in our database
    $result=mysqli_query($conn,$sql);               //to execute the query

    if($result){
        //echo "Data inserted successfully";           //if data added sucessfully echo message
        header('location:viewEmployee.php'); 
    }
    else{
        die(mysqli_error($conn));                   //if there's an error show error message
    }
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style-addEmployee.css">
</head>
<body>
<a href="home.php">Home page</a><br>
<a href="display.php">View product Categories</a>
</button>

<form action="" method="post">

<h2>Add new Employee</h2>
<!-- <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?> -->
     
<label>Employee Name</label>
<input type="text" name="empname" placeholder="Enter Employee name" autocomplete="off"><br>

<label>Date of birth</label>
<input type="date" name="dob" placeholder="Enter birth date"autocomplete="off"><br>

<label>Contact Number</label>
<input type="tel" name="contact" placeholder="Enter contact Number"autocomplete="off"><br>

<label>Address</label>
<input type="text" name="add" placeholder="Enter Address"autocomplete="off"><br>

<label>Salary</label>
<input type="tel" name="sal" placeholder="Enter Salary"autocomplete="off"><br>

<label>Email</label>
<input type="email" name="mail" placeholder="Enter Email address"autocomplete="off"><br>

<label for="employee-type">Choose the Employee type:</label><br>
  <select name="" class="emp-type">
    <option value="">Product Manager</option>
    <option value="">Livestock Manager</option>
    <option value="">Milk Collection Officer</option>
    <option value="">Cashier</option>
    <option value="">Finance Manager</option>
  </select><br><br>
<button type="submit"name="submit">Submit</button>
</form>

</body>
</html>