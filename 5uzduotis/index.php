<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5uzduotis</title>

    <?php 
    // #4701e1
    if(isset($_POST["spalva"])) {
        $spalva = $_POST["spalva"];
        //juoda -> black
        // melyna -> blue
        //raudona -> red
        
        //jeigu ivestame tekste yra #, vadinasi tai yra spalvos kodas
        
        //strpos() - grazina ieskomo simbolio pozicija tekste

        //  tekstasa12563
        //strpos("tekstasa12563", "") - jeigu ieskomas egzistuoja, nurodoma jo pozicija 8
        //strpos("tekstasa12563","0") - jeigu ieskomas tekstas neegzistuoja, grazina false

        // var_dump(strpos( $spalva,"#"));
        #4701e1 - 0, 0!=false, 0 yra teksto pozicija
        //0 == false
        //  0!=false, 0 yra teksto pozicija
        // strpos( $spalva,"#") == 0, false == 0
        // strpos( $spalva,"#") === false, jinai tikrina ne tik kintamojo reiksme bet ir kintamojo tipa, 0!=false
        
        if(!(strpos( $spalva,"#") == 0  && strpos( $spalva,"#") !==false)) {
            if($spalva == "juoda") {
                $spalva = "black";
            } else if($spalva == "melyna") {
                $spalva = "blue";
            } else if($spalva == "raudona") {
                $spalva = "red";
            } else 
            {
                $spalva = "white";
            }
         }
        
            // echo "<style>";
            // echo " body {";
            // echo "    background-color: $spalva;";
            // echo "}";
        
            // echo "</style>";
    }


    ?>

    <style>
        body {
            background-color: <?php echo $spalva ?>;
        }
    </style>
</head>
<body>

        <form action="index.php" method="post">
            <input type="text" name="spalva">
            <button type="submit" name="nudazyk">Nudazyk</button>
        </form>
</body>
</html>


<?php

//isset() - patikrina, ar kintamasis egzistuoja

// 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva.

//1. kaip forma priversti vykdyti ta pati faila
//2. kaip sutvarkyti pati pirma uzkrovima


?>