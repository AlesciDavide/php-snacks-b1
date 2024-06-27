<!-- Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. Nel nostro index.php stampiamo in pagina ognuno di questi array. -->


<?php 
require_once __DIR__ . "/animals.php";

$mammiferi = array_filter($animals, function($animal) {
    return $animal["classe"] =="Mammiferi";
});
$pesci= array_filter($animals, function($animal) {
    return $animal["classe"] =="Pesci";
});
$rettili = array_filter($animals, function($animal) {
    return $animal["classe"] =="Rettili";
});
$uccelli = array_filter($animals, function($animal) {
    return $animal["classe"] =="Uccelli";
});

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Mammiferi:</h1>
    <?php foreach($mammiferi as $animal) {?>
        <h3>
            <?php echo $animal["nome"] ?>
        </h3>
    <?php } ?>
    <h1>Pesci:</h1>
    <?php foreach($pesci as $animal) {?>
        <h3>
            <?php echo $animal["nome"] ?>
        </h3>
    <?php } ?>
    <h1>Rettili:</h1>
    <?php foreach($rettili as $animal) {?>
        <h3>
            <?php echo $animal["nome"] ?>
        </h3>
    <?php } ?>
    <h1>Gli altri:</h1>
    <?php foreach($uccelli as $animal) {?>
        <h3>
            <?php echo $animal["nome"] ?>
        </h3>
    <?php } ?>
</body>
</html>