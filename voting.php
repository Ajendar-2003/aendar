<?php

include 'connection.php';
if (isset($_POST['submit'])) {
  
    $selectedCandidate = $_POST['candidate'];

    // to access the register number from the login page
    session_start();
    if (isset($_SESSION['register_number'])) {
        $regno = $_SESSION['register_number'];
        $department = $_SESSION['department'];
    //    $department = "SELECT department FROM info WHERE regno = $regno ";
    }
        echo $department;
        echo $regno; 
   
       if($department == 'SF'){
    $sql = "UPDATE safety_and_fire SET votes = votes + 1 WHERE candidates_id = ?";}

    else if($department == 'ME'){
        $sql = "UPDATE mechanical_engineering SET  votes = votes + 1 WHERE candidates_id = ?";
    }
    
    else if($department == 'EC'){
        $sql = "UPDATE electronic_communication SET  votes = votes + 1 WHERE candidates_id = ?";
    }
    else if($department == 'IT'){
        $sql = "UPDATE information_and_technology SET  votes = votes + 1 WHERE candidates_id = ?";
    }
    else if($department == 'CS'){
        $sql = "UPDATE computer_science SET  votes = votes + 1 WHERE candidates_id = ?";
    }

    else if($department == 'CE'){
        $sql = "UPDATE civil_engineering SET  votes = votes + 1 WHERE candidates_id = ?";
    }


    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $selectedCandidate);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $voter_voted = "UPDATE info SET voters = 'yes' WHERE regno = ?";

        $stmt2 = $con->prepare($voter_voted);
        $stmt2->bind_param("s", $regno);
        $stmt2->execute(); 

        if ($stmt2->affected_rows > 0) {

             // to update the total votes
    $totalvotes = "UPDATE totalvotes SET  totalVotes = totalVotes + 1 WHERE candidates_id = ?";
    $stmt_totalvotes = $con->prepare($totalvotes);
    $stmt_totalvotes->bind_param("i", $selectedCandidate);
    $stmt_totalvotes->execute();
    $stmt_totalvotes->close();

            echo '
            <script>
            alert("Vote submitted successfully.")
            window.location.href="homepage.php";
            </script>';
        }
        
         else {
            echo "Failed to update the voter's status.";
        }

        $stmt2->close();
    } 
    
    else {
        echo "Failed to submit the vote.";
    }

    //include 'logout.php';

    $stmt->close();
    $con->close();
}

