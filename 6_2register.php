<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CUSAT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #A3DFE6;
            color: black;
            text-align: center;
            padding: 20px 0;
        }

        header h1, header h2, header h3 {
            margin: 5px 0;
        }

        #options {
            background-color: #005793;
            color: white;
            padding: 10px;
            text-align: center;
        }

        #options a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
        }

        .container label {
            display: block;
            margin: 10px 0;
        }

        .container input,
        .container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container button {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #005793;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button[type="submit"]:hover {
	        background-color: green;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            header img {
                display: none;
            }
        }

        @media screen and (max-width: 480px) {
            .container {
                padding: 10px;
            }

            .container input,
            .container select {
                padding: 5px;
            }

            .container button {
                padding: 5px 10px;
            }
        }
    </style>
</head>
<body>

<header id="header">
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="left" alt="logo" margin-left="5px">
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px"  align="right" alt="logo">    
    <h1>ELECTION REGISTRATION</h1>
    <h2>SCHOOL OF ENGINEERING</h2>
    <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
</header>

<nav id="options">
    <a href="elec_roll.php" class="Admissions">View Updated Electoral Roll</a>
    <a href="cnd_list.html" class="Archieves">View Candidate List</a>
</nav>

<div class="container">
    <form name="myForm" action="register.php" method="POST" id="registration-form" class="registration-form">
        <h1><u>REGISTER FOR ELECTIONS</u></h1>
        <label for="register_number">Register Number:</label>
        <input type="number" id="register_number" name="register_number" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="Semester">Semester:</label>
        <select id="semester" name="semester" required>
            <option value="">--Select your Semester--</option>
            <option value="1">1st Semester</option>
            <option value="2">2nd Semester</option>
            <option value="3">3rd Semester</option>
            <option value="4">4th Semester</option>
            <option value="5">5th Semester</option>
            <option value="6">6th Semester</option>
            <option value="7">7th Semester</option>
            <option value="8">8th Semester</option>
        </select>

        <label for="Department">Department:</label>
        <select id="department" name="department" required>
            <option value="">--Select your Department--</option>
            <option value="CS">Computer Science</option>
            <option value="IT">Information Technology</option>
            <option value="EC">Electronic Communication</option>
            <option value="SF">Safety And Fire</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="CE">Civil Engineering</option>
            <option value="EE">Electrical Engineering</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" class="formerror" required>
        <button type="submit" id="submit" value="submit">Register</button>
    </form>
</div>
</body>
</html>