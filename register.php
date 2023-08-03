<?php

include 'student_details.php';

session_start();

$regno=$_POST['register_number'];
$username=$_POST['name'];
$email=$_POST['email'];
$semester=$_POST['semester'];
$department=$_POST['department'];
$password=$_POST['password'];
$cpassword=$_POST['confirm_password'];

if($password !== $cpassword)
{
    echo '<script>
        alert("Password do not match");
        window.location.href="6_2register.php";
    </script>';
}
else {
    $candidateKeys[] = $_SESSION['candidatekeys'];
    //echo implode(', ', $candidateKeys);
    $success = false;

     // Apply hashing to the password
     $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    foreach ($candidateKeys as $values) {
        if ($values == $regno) {
            $sql = "INSERT INTO `info` (regno, name, email, semester, department, password)
            VALUES ('$regno', '$username', '$email', '$semester', '$department', '$hashed_password')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                $success = true;
                break;
            }
        }
    }

    mysqli_close($con);

    if ($success) {
        echo '<script>
            alert("Registration is Successful!");
            window.location.href= "homepage.php";
        </script>';
    } else {
        echo '<script>
            alert("Registration number is not correct!");
            window.location.href= "homepage.php";
        </script>';
    }
}
?>
