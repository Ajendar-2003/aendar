<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto; 
            padding: 20px;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f2f2f2;
        }

        body{
            background-color: #f2f2f2;
        }

        .container h1 {
            background-color: #005793;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 24px; 
        }


        .container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .container th {
            background-color: #A3DFE6;
            border: 1px solid black;
            padding: 12px; 
            text-align: center;
            font-size: 18px; 
            height: 50px; 
        }

        .container td {
            border: 1px solid black;
            padding: 12px;
            text-align: center;
            font-size: 16px;
            height: 40px; 
        }

        .container .box {
            border: 2px solid goldenrod;
            padding: 10px;
            width: fit-content;
            margin: 20px auto; 
            color: goldenrod; 
            transition: transform 0.3s ease;
        }

        .container .box:hover {
            transform: scale(1.1); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Election Results</h1>
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
                $selectquery = "select * from totalvotes";
                $query = mysqli_query($con, $selectquery);
                $num = mysqli_num_rows($query);

                $maxVotes = 0;
                $candidateWithMaxVotes = "";

                while ($res = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $res['candidates_id']   ?></td>
                        <td><?php echo $res['name']   ?></td>
                        <td><?php echo $res['totalVotes']  ?></td>
                    </tr>
                    <?php

                    if ($res['totalVotes'] > $maxVotes) {
                        $maxVotes = $res['totalVotes'];
                        $candidateWithMaxVotes = $res['name'];
                    }
                    elseif ($res['totalVotes'] === $maxVotes){
                        $candidateWithMaxVotes .= ", " . $res['name'];
                    }
                }
                ?>
            </tbody>
        </table>

        <br><br><br><br>
        <div class="box">
            <h2><b>Election Winner: <?php echo $candidateWithMaxVotes; ?></b></h2>
        </div>
    </div>
</body>
</html>

