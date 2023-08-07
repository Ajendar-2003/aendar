<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election Homepage | CUSAT</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .left {
            flex: 1;
            background-image: url("https://thefulcrum.us/media-library/online-voting.jpg?id=27249275&width=2110&height=1421&quality=85&coordinates=0%2C0%2C0%2C0");
            background-size: cover;
            background-position: center;
            color: black;
            padding: 20px;
            min-height: 100vh;
            text-align: left;
        }

        .right {
            flex: 1;
            background-image: url("https://img.freepik.com/premium-vector/hand-holding-phone-illustration_113065-778.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 3px;
        }

        ol {
            margin-top: 25px;
            padding: 10px;
            margin: 0;
            background-color: #A3DFE6;
            border-radius: 5px;
        }

        li {
            margin-bottom: 5px;
            margin-left: 20px;
        }

        .login-options {
            text-align: center;
            margin-top: -15px;
            margin-left: 10px;
        }

        .login-options a {
            display: block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #005793;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 180px;

        }

        .login-options a:hover {
            background-color: #005703;
        }

        /* Responsive CSS */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .left, .right {
                flex: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1><b><u>ELECTION PORTAL</u></b></h1>
            <h2>SCHOOL OF ENGINEERING</h2>
            <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
            <br><br><br>
            <h1>Five reasons you need to vote today!</h1>
            <ol>
                <li>Vote to grow the future.</li>
                <li>Elected representatives are responsible for an organisation handling so much.</li>
                <li>Be represented in college effectively.</li>
                <li>Elected reps can make real changes to students’ lives and their university experience.</li>
                <li>A higher voter turnout provides elected reps with increased legitimacy when they are discussing issues in public and negotiating with the university.</li>
            </ol>
        </div>
        <div class="right">
            <div class="login-options">


            <?php 
                    include 'connection.php';
                   if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                    }
            $sql = "SELECT value FROM login ";
            $result = $con->query($sql);

                    if ($result->num_rows === 1) {
                     $row = $result->fetch_assoc();
                        $currentValue = $row['value'];

                    if($currentValue === 'yes'){
            ?>
                  <a href="6_1login.php">Login</a>
                    <?php
                    }
                }
            ?>  
                

            <?php 
                    include 'connection.php';
                   if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                    }
            $sql = "SELECT value FROM register ";
            $result = $con->query($sql);

                    if ($result->num_rows === 1) {
                     $row = $result->fetch_assoc();
                        $currentValue = $row['value'];

                    if($currentValue === 'yes'){
            ?>
                 <a href="6_2register.php">Register</a>
                    <?php
                    }
                }
            ?>  
                
                <a href="elec_roll.php">Electoral Roll</a>
                <a href="cnd_list.html">List of Candidates</a>
                <a href="Admin.php">Admin Login</a>

                <?php 
                    include 'connection.php';
                   if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }
        $sql = "SELECT vlaue FROM result_show_homepage ";
            $result = $con->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $currentValue = $row['vlaue'];

    if($currentValue === 'yes'){
        ?>
                    <a href="results.php" id="result">Result</a>
                    <?php
    }
}
?>  
            </div>
        </div>
    </div>
</body>
</html>
