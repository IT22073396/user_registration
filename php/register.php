<?php include __DIR__ . '/../php/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user_registration/css/styles.css">
</head>
<body>
    <div class="container">
        
        <div class="left-panel">
            <h2>Welcome!</h2>
            <p>Register now to access your account and explore more features.</p>
        </div>

       
        <div class="right-panel">
            <h2>Register</h2>
            <form action="/user_registration/php/register_process.php" method="POST">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>

                <label>Email</label>
                <input type="email" class="form-control" name="email" required>

                <label>Password</label>
                <input type="password" class="form-control" name="password" required>

             
                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="/user_registration/php/user_list.php" class="btn btn-info">User List</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
