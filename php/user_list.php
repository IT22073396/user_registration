<?php
include 'php/db_connect.php';
?>
<!DOCTYPE <html>

<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
        <h2>User List</h2>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='php/delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>
                     </tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>