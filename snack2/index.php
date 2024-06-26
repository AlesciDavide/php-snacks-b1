<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php 
$name = $_GET["name"] ?? '';
$mail = $_GET["mail"] ?? '';
$age = $_GET["age"] ?? '';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <label for="name">inserisci il nome:</label>
        <input type="text" name="name" id="name">
        <label for="mail">inserisci il nome:</label>
        <input type="mail" name="mail" id="mail">
        <label for="age">inserisci il nome:</label>
        <input type="text" name="age" id="age">
        <button type="submit">send</button>

        <?php
        if(strlen($name >= 3 && str_contains($mail, '@') &&  str_contains($mail, '.') && is_numeric($age))){
            echo "<h1>Accesso riuscito</h1>";
        }elseif($name == '' && $mail == '' && $age == ''){
            
        }else{
            echo "<h1>Accesso negato</h1>";
        }
        ?>
    </form>
</body>
</html>