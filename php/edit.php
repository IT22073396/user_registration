<?php
include 'php/db_connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="php/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="user_list.php" class="btn btn-info">Back</a>
        </form>
    </div>
</body>
</html>
