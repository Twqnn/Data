<?php



function insertDataIntoDatabase(PDO $conn, array $data) : void

{
$query_met_named_placeholder = "INSERT INTO producten (product_naam,prijs_per_stuk,omschrijving)
VALUES (:product,:prijs,:omschr)";

$data = ["product" => $data[0], "prijs" => $data[1], "omschr" => $data[2]];

$statement = $conn->prepare($query_met_named_placeholder);
$statement->execute($data);
}

$producten=array("(item)","(prijs)","(omschr)");
insertDataIntoDatabase($conn,$producten);

?>



?>