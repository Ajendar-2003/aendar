<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="main-div">
        <h1>LIST OF STUDENTS</h1>
        <br>
        
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <head>
                        <tr>
                            <th>Register Number</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Department</th>
                        </tr>
                    </head>
                    
                    <tbody>
                        <?php 
                        include 'connection.php';
                        $selectquery="select * from student_details ";

                        $query=mysqli_query($con,$selectquery);
                        $num=mysqli_num_rows($query);
                        
                        while($res=mysqli_fetch_array($query))
                        {
                            ?>
                    
                        <tr>
                        <td><?php echo $res['regno']   ?></td>
                        <td><?php echo$res['name']   ?></td>
                        <td><?php echo $res['semester']  ?></td>
                        <td><?php  echo$res['department']?></td>
                        
                        </tr>
                        <?php
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>