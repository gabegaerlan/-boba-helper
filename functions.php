<?php
session_start();
include './db.php';

function displayBoba()
{
     $conn = getDatabaseConnection();
      $sql = "SELECT *
              FROM boba
              ORDER BY type";
              
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

function addBoba()
{
    $conn = getDatabaseConnection();
    function getDrinks()
    {
        global $conn;
        $sql = "SELECT *
                FROM boba
                ORDER BY bobaName";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    if(isset($_GET['addDrink']))// The addUser form has been pressed
    {
        $sql = "INSERT INTO boba(bobaName,type,description)
                VALUES(:bobaName,:type,:description)";
        $np = array();
        
        $np[':bobaName'] = $_GET['bobaName'];
        $np[':type'] = $_GET['type'];
        $np[':description'] = $_GET['description'];

        $stmt=$conn->prepare($sql);
        $stmt->execute($np);
        
        echo"<center>Drink Added!</center>";
        header("Location: index.php");
    }    
}

?>