<?php
    include 'connection.php';
        
    $username= $_POST['username'];
    $password = $_POST['password'];

    if($con->connect_error){
        die("Failed to connect :" .$con->connect_error);
    }

    else{
        $stmt=$con->prepare("select *  from admin where username = ?");
        $stmt->bind_param("i",$username);
        $stmt->execute();
        $stmt_result=$stmt->get_result();

        if( $stmt_result->num_rows>0){
            $data=$stmt_result->fetch_assoc();

            if( $data['password']===$password){
                
                    header("location:admin_page.php");}
                   
            }
        

        else{
           echo '<script>
           window.location.href="Admin.php";
            alert("Entered credentails are incorrect!");
           </script>';
            }
    }

    ?>