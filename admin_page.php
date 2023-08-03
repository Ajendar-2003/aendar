<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #A3DFE6;
            color: black;
            text-align: center;
            padding: 2%;
            border-bottom: 2px solid #005793;
        }
        header h1, header h2, header h3 {
            margin: 1% 0;
        }
        .admin-container {
            position: relative;
            width: 50%;
            margin: 5% auto;
            padding: 3%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .admin-container h1 {
            text-align: center;
            margin-bottom: 2%;
            font-size: 3vw;
        }
        .admin-container p {
            text-align: center;
            margin-bottom: 1%;
            font-size: 1.5vw;
        }
        .admin-links {
            text-align: center;
        }
        /* .admin-links a {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 2% 6%;
            background-color: #005793;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            font-size: 2vw;
            transition: all 0.3s ease;
        }
        .admin-links a:hover {
            background-color: #008000;
            transform: scale(1.1);
        } */
        .admin-links a {
            display: block;
            width: 30%;
            margin: 10px auto;
            padding: 1.5% 4%;
            background-color: #005793;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            font-size: 1.5vw;
            transition: all 0.3s ease;
        }
        .admin-links a:hover {
            background-color: #008000;
            transform: scale(1.1);
        }
        .logout-btn {
            position: absolute;
            top: 2%;
            right: 2%;
            background-color: maroon;
            padding: 1% 2%;
            border-radius: 3px;
            color: white;
            text-decoration: none;
            font-size: 1.2vw;
            transition: all 0.3s ease;
        }
        .logout-btn:hover {
            background-color: red;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<header>
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="left" alt="logo">
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="right" alt="logo">    
    <h1>STUDENT ELECTIONS</h1>
    <h2>SCHOOL OF ENGINEERING</h2>
    <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
</header>

<div class="admin-container">
<a href="logout_admin.php" class="logout-btn">Logout</a>
    <h1>Welcome, Admin!</h1>
    <h2>What would you like to do?</h2>
    <div class="admin-links">
        <a href="departmentresults.php">Votes by Departments</a>
        <a href="electroll.php">Current Poll Status</a>
        <a href="display_student_details.php">College Database</a>
        <a href="activate_register.php">Toggle Register</a>
        <a href="activate_login.php">Toggle Login</a>
        <a href="activate_result.php">Toggle Results</a>
    </div>
</div>
</body>
</html>

