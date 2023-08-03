<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            border-bottom: 2px solid #005793;
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
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="left" alt="logo">
    <img src="https://upload.wikimedia.org/wikipedia/en/6/6f/Cochin_University_of_Science_and_Technology_Logo.png" height="100px" width="100px" align="right" alt="logo">
    <h1>COLLEGE ELECTIONS</h1>
    <h2>SCHOOL OF ENGINEERING</h2>
    <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
</header>

<div class="container">
<div class="login-container">
        <h1>Admin Login</h1>
        <form action="Admin_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
