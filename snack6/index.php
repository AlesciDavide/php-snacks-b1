<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="flex">
        <div class="grey flex">
            <ul>
                <?php foreach($db["teachers"] as $key => $name) {  ?>
                    <li>
                        <?php echo $name["name"] . ' ' . $name["lastname"] ?>
                    </li>
                <?php }?>    
            </ul>
    
        </div>
        <div class="green flex">
        <ul>
                <?php foreach($db["pm"] as $key => $name) {  ?>
                    <li>
                        <?php echo 'Nome:' . $name["name"] . ' ' . $name["lastname"] ?>
                    </li>
                <?php }?>    
            </ul>
        </div>

    </section>
</body>
</html>