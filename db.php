<?php
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

function getDBConn(){
    mysql_connect("us-cdbr-iron-east-03.cleardb.net","b1f0aa2908c861","0eb70cc4") or die ("could not connect");
    mysql_select_db("heroku_e9d1cc3ad148014") or die("could not find db");
}
?>