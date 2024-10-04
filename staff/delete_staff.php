<?php
require_once "../dbcon.php";

if (isset($_GET['empid'])) {
    $empid = $_GET['empid'];
    $sql = "DELETE FROM employee WHERE empid = $empid";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");  // Redirect back to employee management page
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
