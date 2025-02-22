<?php
include '../php/db_connect.php'; 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

   
    $id = intval($id);  
    $name = htmlspecialchars(trim($name));  
    $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL); 

    
    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    
    
    if ($stmt = $conn->prepare($sql)) {
      
        $stmt->bind_param("ssi", $name, $email, $id);  

        
        if ($stmt->execute()) {
            
            header("Location: ../php/user_list.php");
            exit(); 
        } else {
            echo "Error updating user: " . $stmt->error;
        }

        $stmt->close();  
        echo "Error preparing statement: " . $conn->error;
    }
}
?>
