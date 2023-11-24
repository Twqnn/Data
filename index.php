<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Winkel"; 

try {
    $pdo = new PDO("mysql:host=$servername;$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database ($dbname)";
} catch (PDOException $e) {
    die("Connection failed");
}

?>

</body>
</html>
