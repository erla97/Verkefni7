<?php

$nafn = $_GET['name'];
$email = $_GET['netfang'];
$pw = $_GET['lykilord'];

$servername = "localhost";
$username = "*****";
$password = "*****";
$dbname = "V7";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql = "INSERT INTO Notendur (nafn, netfang, lykilord) VALUES ('$nafn','$email','$pw')";
    $conn->exec($sql);
    echo "Komið!";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

?>