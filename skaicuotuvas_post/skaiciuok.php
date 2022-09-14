<?php 



$skaicius1 = $_POST["skaicius1"];
$skaicius2 = $_POST["skaicius2"];

$veiksmas = $_POST["veiksmas"];

$rezultatas = 0;
if($veiksmas == "sudek")
{
    $rezultatas = $skaicius1 + $skaicius2;
}
else if($veiksmas == "atimk")
{
    $rezultatas = $skaicius1 - $skaicius2;
} 


echo "<h1>Rezultatas: $rezultatas</h1>";


?>