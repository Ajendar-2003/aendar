<?php
include 'connection.php'; 


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$id = 1;
$sql = "SELECT value FROM login WHERE id = $id";
$result = $con->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $currentValue = $row['value'];

    $newValue = ($currentValue === "yes") ? "no" : "yes";

    $updateSql = "UPDATE login SET value = '$newValue' WHERE id = $id";

    if ($con->query($updateSql) === TRUE) {
        echo "Value updated successfully. New value: " . $newValue;
    } else {
        echo "Error updating value: " . $con->error;
    }
} else {
    echo "No row found with ID: " . $id;
}

$con->close();

header('location:admin_page.php');
?>
