
<?php global $y; ?>

<?php 
//kintamojo is naujo NEDEKLARUOJA
$y = 5;
echo $y; ?>

<?php 

//Kintamuju hierarchija

//Lokalus - kintamasis, kuris veikia tik musu 1 dokumente(bet nebutinai visame)
//Globalus - kintamasis, kuris veikia visame dokumente ir (prie jo prijungtuose kituose dokumentuose)
//Superglobalus - visuose serverio dokumentuose. Negalime sukurti!!!

//$_GET[]; kaip mes talpiname informacija per NUORODA ARBA PER FORMA
// $_POST[] - kaip mes talpiname informacija per FORMA

//_COOKIE[]
//_SESSION[]
//_SERVER[] - serverio informacija. Negalime nieko talpinti!


?>

<?php //x neegzistuoja ?>
<?php // x neegzistuoja ?>
<!-- Lokalus -->
<?php $x = 5; ?>
<!-- Globalus -->
<?php global $y; ?>
<?php //$y = 15; ?>
<?php echo $y;  ?>
<?php  ?>

<?php 





?>
<!-- get -->
<!-- post -->
<!-- action - php failas, kuris atliks skaiciavimus -->
<form method="get" action="get.php">
    <input type="text" name="skaicius">
    <input type="text" name="skaicius1">
    <button type="submit">Spausk</button>
</form>