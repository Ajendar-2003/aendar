<?php
    include 'connection.php';
    session_start();

    $stmt = $con->prepare("SELECT regno FROM student_details");
    $stmt->execute();
    $result = $stmt->get_result();

    $candidateKeys = array();

    while ($row = $result->fetch_assoc()) {
        $regno = $row['regno'];
        $candidateKeys[] = $regno;
        $_SESSION['regno_' . $regno] = $regno;
    }

    $_SESSION['candidateKeys'] = $candidateKeys;

    echo implode(', ', $_SESSION['candidateKeys']);
?>
