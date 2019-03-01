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

function edit(){
// if(!isset($_SESSION['admin']))// if(!isset($_SESSION['userName']) || !isset($_SESSION['adminName']))
// {
//     header("Location: index.php");
// }
    $conn = getDatabaseConnection();
    function getBobaInfo() {
        global $conn;
        
        $sql = "SELECT * 
                FROM boba
                WHERE id = " . $_GET['id']; 
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    
    }
    if(isset($_GET['edit'])){// checks whether admin has submitted form
        $conn = getDatabaseConnection();
        echo "Form has been submitted!";
        $sql = "UPDATE boba
                SET bobaName = :bobaName,
                    type = :type,
                    description = :description
                WHERE id = :id";
        $np = array();
    
        $np[':id'] = $_GET['id'];
        $np[':bobaName'] = $_GET['bobaName'];
        $np[':type'] = $_GET['type'];
        $np[':description'] = $_GET['description'];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        
        
        
        echo"Record has been updated!";
        header("Location: index.php");
    }
    if(isset($_GET['id'])){
    $bobaInfo = getBobaInfo();
    }
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
        header("Location: admin.php");
    }    
}

function loginAdmin() 
{
    $conn = getDatabaseConnection();
    if (isset($_POST['login']))// check if <form> is pressed 
    {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        
        $sql = "SELECT *
            FROM admin
            WHERE username = :username 
            AND   password = :password ";
        
        $namedParameters = array();
        $namedParameters[':username'] = $username;
        $namedParameters[':password'] = $password;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        $record = $stmt->fetch();
        
        if (empty($record)) 
        {
        
        echo "<center>Incorrect Username or Password</center>";
        
        } 
        else 
        {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $record['username'];
            $_SESSION['fullName'] = $record['firstName'] . "  " . $record['lastName'];
            $_SESSION['admin'] = $record['firstName'].''.$record['lastName'];
        
            header("Location: admin.php");
        }
    }
}


?>