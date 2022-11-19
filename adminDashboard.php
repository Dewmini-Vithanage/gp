<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminDashboard</title>
    <link rel="stylesheet" href="style-adminDashboard.css">
</head>
<body>
<div class="sidebar">
 <div class="sidebar-title">
    <h1>Koratuwa Dairy Farm</h1>
    <img src="images/3.png" alt="">
</div>
    <div class="sidebar-menu">

        <ul>
            <li>
                
                <div class="dropdown">
                    <a href="#">Employees</a>
                    <div class="dropdown-content">
                        <a href="addEmployee.php">Add Employee</a>
                        <a href="viewEmployee.php">View Employee</a>
                        
                    </div>
                  </div>
            </li>
            <li>
                <a href="#">Livestock</a>
            </li>
            <li>
                <a href="#">Milk Collection</a>
            </li>
            <li>
                <a href="#">Production</a>
            </li>
            <li>
                <a href="#">Sales</a>
            </li>
            <li>
                <a href="#">Finances</a>
            </li>
            <li>
                <a href="#">External Users</a>
            </li>
        </ul>
    </div>
 </div>

<div class="main-content">
    <header>
        <h1>Dashboard</h1>

        <div class="user-wrapper">
            <img src="images/user.png" alt="">
            <div>
                <h4>Apsara Hansani</h4>
                  ADMIN

            </div>
        </div>
    </header>

    <main>
        <div class="cards">

            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Staff</h3>
                
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Cattle</h3>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Milk Collection</h3>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Orders</h3>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Supplies</h3>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>90</h1>
                    <h3>Total Income</h3>
                </div>
            </div>
        </div>


    </main>
</div>
   
</body>
</html>