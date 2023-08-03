<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Votes</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
            background-color: #005793;
            text-align: center;
            color: white;
            padding: 10px;
            margin-top: 0;
        }
        .container {
            text-align: center;
        }
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }
        th {
            background-color:#A3DFE6;
        }
        tr:hover {
            background-color: white;
        }
        table {
            width: 85%;
            margin: auto;
        }
        th:nth-child(1),
        td:nth-child(1) {
            width: 15%; /* Decrease the width of the "Serial No" column */
        }
        th:nth-child(2),
        td:nth-child(2) {
            width: 60%; /* Increase the width of the "Candidate Name" column */
        }
    </style>
</head>
<body>
    <h1>Votes Tally by Department</h1>

    <div class="container">
        <h3>Information and Technology</h3>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Candidate Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $selectquery = "select * from information_and_technology ";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['votes'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>

    <div class="container">
        <h3>Computer Science</h3>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Candidate Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $selectquery = "select * from computer_science ";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['votes'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>

    <div class="container">
        <h3>Electronic and Communication</h3>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Candidate Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $selectquery = "select * from electronic_communication ";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['votes'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>

    <div class="container">
        <h3>Mechanical Engineering</h3>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Candidate Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $selectquery = "select * from mechanical_engineering ";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['votes'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>

    <div class="container">
        <h3>Safety and Fire</h3>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Candidate Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $selectquery = "select * from safety_and_fire";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['votes'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>
</body>
</html>
