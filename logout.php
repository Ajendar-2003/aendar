<?php
session_start();
?>

<script>
alert("Vote submitted successfully.")
</script>

<?php
session_destroy();

header('location:6_1login.php');

?>