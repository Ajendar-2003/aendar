<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CUSAT</title>
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

        .container {
            margin: 20px auto;
            margin-top: 7%;
            max-width: 30%;
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

        .container input[type="number"],
        .container input[type="password"] {
            width: 90%;
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

            .container input[type="number"],
            .container input[type="password"] {
                padding: 5px;
            }

            .container button {
                padding: 5px 10px;
            }
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

<div class="container">
    <form class="login-form" action="login.php" method="post">
        <h1><u>LOGIN</u></h1>
        <label for="register_number">Register Number:</label>
        <input type="number" id="register_number" name="register_number" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>