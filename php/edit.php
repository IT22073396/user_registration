<?php
// Correct the path to db_connect.php
include '../php/db_connect.php'; // Adjust this according to where your files are located
$id = $_GET['id'];

// Safely handle the ID to prevent SQL injection
$id = intval($id); // Ensure it's an integer

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);

// Check if a user was found
if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
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
        <form action="../php/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/user_registration/php/user_list.php" class="btn btn-info">Back</a>
        </form>
    </div>
</body>
</html>
