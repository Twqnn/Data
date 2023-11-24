<?php 
// De informatie van het formulier op index.html komt terecht in de variabele $_POST
// $_POST is een array;
// en de kunnen we uitprinten met de functie print_r();
// print_r($_GET);


// echo $_POST["name"]
$myPostArgs = $_POST;
print_r($myPostArgs);

foreach($myPostArgs as $arrValue)
{

    echo "$arrValue <br>";
}

foreach($myPostArgs as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo  "<br>";

}