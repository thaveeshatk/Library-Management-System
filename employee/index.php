<?php
    require_once "../dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Employee Management</h2>
        
        <!-- Add New Employee Form -->
        <form action="add_employee.php" method="POST" class="mb-4">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="pnumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="pnumber" name="pnumber" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="pw" class="form-label">Password</label>
                <input type="password" class="form-control" id="pw" name="pw" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>

        <!-- Employee List Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Emp ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = mysqli_query($con, "SELECT * FROM employee");
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td>{$row['empid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['pnumber']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['pw']}</td>
                            <td>
                                <a href='edit_employee.php?empid={$row['empid']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_employee.php?empid={$row['empid']}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
