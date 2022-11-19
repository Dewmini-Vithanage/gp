<?php
include 'connect.php';               //connect to database
if(isset($_GET['deleteid'])){         //if data is DELETED
    $id=$_GET['deleteid'];             //variable we create=post[name given in the anchor tag]
    

    $sql="delete from employee where employee_id=$id";            //sql query to delete data from the table in our database
    $result=mysqli_query($conn,$sql);               //to execute the query

    if($result){
        //echo "Deleted successfully";  //if data deleted sucessfully echo message
        header('location:viewEmployee.php');  
    }
    else{
        die(mysqli_error($conn));                   //if there's an error show error message
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="home.php">Home page</a><br>
<a href="display.php">View product Categories</a>
</button>



</body>
</html>