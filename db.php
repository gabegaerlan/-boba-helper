<?php
// Database
// username: b8df61fa06cf94
// password: e0cabfd0
// host: us-cdbr-iron-east-05.cleardb.net
// db: heroku_21d18c1df95a42f
function getDatabaseConnection()
{
    $host = "us-cdbr-iron-east-03.cleardb.net";
    $username = "b1f0aa2908c861";
    $password = "0eb70cc4";
    $dbname="heroku_e9d1cc3ad148014";

    // Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
?>