<?php

require_once "../dbcon.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM staff WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");  // Redirect back to staff management page
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
