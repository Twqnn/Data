
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST">

<label for="product_naam">Product Naam:</label><br>
<input type="text" id="product_naam" name="product_naam"><br>
<label for="prijs_per_stuk">Prijs per stuk:</label><br>
<input type="text" id="prijs_per_stuk" name="prijs_per_stuk"><br>
<label for="omschrijving">Omschrijving:</label><br>
<input type="text" id="omschrijving" name="omschrijving"><br><br>
<input type="submit" value="Submit">
<br><br><br>

</form>

<?php

$servername = "localhost"; 
$username = "root"; 
$password = "hafvap-xubDoh-6facze"; 
$dbname = "Winkel"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=Winkel", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database ($dbname)";
} catch (PDOException $e) {
    die("Connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES ('$product_naam', $prijs_per_stuk, '$omschrijving')";

    if ($conn->exec($sql) !== FALSE) {
        echo "Product succesvol toegevoegd";
    } else {
        echo "Fout bij het toevoegen van het product: " . implode(":", $conn->errorInfo());
    }
}
?>





</body>
</html>
