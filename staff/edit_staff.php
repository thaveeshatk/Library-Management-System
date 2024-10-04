<?php
require_once "../dbcon.php";

if (isset($_GET['empid'])) {
    $empid = $_GET['empid'];
    $result = mysqli_query($con, "SELECT * FROM employee WHERE empid = $empid");
    $employee = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $age = $_POST['age'];
    $pw = $_POST['pw'];

    $sql = "UPDATE employee SET name='$name', pnumber='$pnumber', age='$age', pw='$pw' WHERE empid=$empid";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");  // Redirect back to employee management page
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Employee</h2>

        <form action="edit_employee.php" method="POST">
            <input type="hidden" name="empid" value="<?php echo $employee['empid']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $employee['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pnumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="pnumber" name="pnumber" value="<?php echo $employee['pnumber']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $employee['age']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pw" class="form-label">Password</label>
                <input type="password" class="form-control" id="pw" name="pw" value="<?php echo $employee['pw']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
