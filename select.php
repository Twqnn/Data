<?php

// Verbinding maken 
$servername = "localhost"; 
$username = "root"; 
$password = "hafvap-xubDoh-6facze"; 
$dbname = "Winkel"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM producten";
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    // Tabel van alles
    echo "<table border='1'><tr><th>Product Code</th><th>Naam</th><th>Prijs</th></tr>";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["product_code"]. "</td><td>" . $row["product_naam"]. "</td><td>" . $row["prijs_per_stuk"]. "</td></tr>";
    }
    echo "</table>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Alleen de eerste
$sql = "SELECT * FROM producten WHERE product_code = :productCode";
$productCode = 1;

$stmt = $conn->prepare($sql);
$stmt->bindParam(":productCode", $productCode, PDO::PARAM_INT);
$stmt->execute();


$result = $stmt->fetch(PDO::FETCH_ASSOC);


if ($result) {
    echo "Product Code: " . $result["product_code"]. " - Naam: " . $result["product_naam"]. " - Prijs: " . $result["prijs_per_stuk"]. " - Omschrijving: ". $result["omschrijving"];
} else {
    echo "Geen resultaten gevonden voor product_code = 1";
}

$stmt->closeCursor();
// Alleen de tweede

$sql = "SELECT * FROM producten WHERE product_code = :productCode";
$productCode = 2;

$stmt = $conn->prepare($sql);
$stmt->bindparam(":productCode", $productCode, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo "<br>Prudoct Code: " . $result["product_code"]. " - Naam: " . $result["product_naam"]. " - Prijs: ". $result["prijs_per_stuk"]. " - Omschrijving: ". $result["omschrijving"];
} else {
    echo "Geen resultaat gevonden voor product_code = 2";
}

$stmt->closeCursor();
// Verbinding stoppen
$conn = null;
?>
