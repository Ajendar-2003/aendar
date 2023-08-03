<?php
    include 'connection.php';
    
    session_start();
        $_SESSION['register_number'] = $_POST['register_number'];
        
    $regno= $_POST['register_number'];
    $password = $_POST['password'];

    if($con->connect_error){
        die("Failed to connect :" .$con->connect_error);
    }

    else{
        $stmt=$con->prepare("select *  from info where regno = ?");
        $stmt->bind_param("i",$regno);
        $stmt->execute();
        $stmt_result=$stmt->get_result();

        if( $stmt_result->num_rows>0){
            $data=$stmt_result->fetch_assoc();
            $_SESSION['department'] = $data['department'];
            echo $department;


            if((password_verify($password,$data['password']))){
                if($data['voters'] !== 'yes'){
                    header("location:6_3voting.php");}
                    
                    else{
                    echo '
                    <script>
                    alert("Already voted");
                    window.location.href="6_1login.php";
                    </script>';
                }
            }
        

        else{
           echo '<script>
           window.location.href="6_1login.php";
            alert("Entered credentails are incorrect!");
           </script>';
            }
        }
    }

    ?>