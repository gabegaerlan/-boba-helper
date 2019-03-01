<?php
    include'./db.php';
    $conn = getDatabaseConnection();
    
    $sql = "DELETE FROM boba
            WHERE id = ". $_GET['id'];
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
?>