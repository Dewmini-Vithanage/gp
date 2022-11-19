<?php
include 'connect.php';                   //connect the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="style-viewEmployee.css">
</head>
<body>
 <a href="adminDashboard.php">Dashboard</a><br>
    <a href="addEmployee.php">Add new Employee</a>

    <!-- creating the table to display the data -->
<table>           
  <tr>
    <th scope="col">Employee ID</th>
    <th scope="col">Employee Name</th>              
    <th scope="col">Date of Birth</th>
    <th scope="col">Contact Number</th>
    <th scope="col">Address</th>
    <th scope="col">Salary</th>
    <th scope="col">Email</th>
    <th scope="col">Operations</th>
  </tr>

 <?php
 $sql="Select * from employee";              //select all data from the table
 $result=mysqli_query($conn,$sql);
 if($result){
     while($row=mysqli_fetch_assoc($result)){
    $empid=$row['employee_id'];                     //variable we create=$row[column name from the table]
    $empname=$row['employee_name'];
    $dob=$row['dob'];
    $contact=$row['contact_no'];
    $add=$row['address'];                     //variable we create=$row[column name from the table]
    $sal=$row['salary'];
    $mail=$row['email'];
   
    echo ' <tr>                                        
    <th scope="row">'.$empid.'</th>
    <td>'.$empname.'</td>
    <td>'.$dob.'</td>
    <td>'.$contact.'</td>
    <td>'.$add.'</td>
    <td>'.$sal.'</td>
    <td>'.$mail.'</td>
    <td>
    <a class="delete-btn" href="deleteEmployee.php?deleteid='.$empid.'">Delete</a>
    <a class="update-btn" href="updateEmployee.php?updateid='.$empid.'">Update</a>

</td>
    </tr>';
   }
 }
 ?>
 
</table>

</body>
</html>