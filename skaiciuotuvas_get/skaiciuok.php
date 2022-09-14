<?php 


//atimk = atimtis
//sudek = sudetis

//GET nekencia tusciu reiksmiu

$skaicius1 = $_GET["skaicius1"];
$skaicius2 = $_GET["skaicius2"];

$veiksmas = $_GET["veiksmas"];

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

