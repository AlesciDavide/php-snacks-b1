<!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
require_once __DIR__ . "/alunni.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php foreach ($alunni as $key => $alunno) { ?>
            <h1>
            <?php echo $alunno['nome']?> <?php echo $alunno['cognome']?> 
            </h1>
            <?php
            $sum = 0;
            ?>
            <?php foreach ($alunno['voti'] as $chiave => $voti) {?> 
                <?php $sum += $voti ?>

                <?php } ?> 
                <?php  ?> 
                <p>ecco la media dei voti: <?php echo intdiv($sum , ($chiave + 1)) ?>  </p>
        <?php } ?>
    </section>
</body>
</html>