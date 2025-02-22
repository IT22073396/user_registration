<?php include __DIR__ . '/../php/db_connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Registration</h2>
        <form action="/user_registration/php/register_process.php" method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="/user_registration/php/user_list.php" class="btn btn-info">User List</a>

        </form>
    </div>
</body>
</html>
</html>