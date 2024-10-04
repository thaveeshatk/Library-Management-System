<?php
 require_once "../dbcon.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];

    $sql = "INSERT INTO staff (name, contact, age) VALUES ('$name', '$contact', '$age')";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");  // Redirect back to staff management page
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
