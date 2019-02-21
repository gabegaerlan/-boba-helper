<?php
session_start();
include './db.php';

function displayBoba()
{
     $conn = getDatabaseConnection();
      $sql = "SELECT *
              FROM boba
              ORDER BY id";
              
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

?>