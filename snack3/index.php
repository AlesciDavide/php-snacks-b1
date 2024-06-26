<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->


<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Articolo 1',
            'author' => 'Mario Rossi',
            'text' => 'Questo è il contenuto dell\'articolo 1'
        ],
        [
            'title' => 'Articolo 2',
            'author' => 'Anna Verdi',
            'text' => 'Questo è il contenuto dell\'articolo 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Articolo 3',
            'author' => 'Luca Bianchi',
            'text' => 'Questo è il contenuto dell\'articolo 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Articolo 4',
            'author' => 'Sara Neri',
            'text' => 'Questo è il contenuto dell\'articolo 4'
        ],
        [
            'title' => 'Articolo 5',
            'author' => 'Paolo Gialli',
            'text' => 'Questo è il contenuto dell\'articolo 5'
        ],
        [
            'title' => 'Articolo 6',
            'author' => 'Elena Blu',
            'text' => 'Questo è il contenuto dell\'articolo 6'
        ]
    ],
];
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
        <ul>
            <?php foreach ($posts as $key => $date) { ?>
                <li>
                    data: <?php echo $key ?>
                    <ul>
                        <?php foreach ($date as $singlePost){ ?>
                            <li>
                                <p>title: <?php echo $singlePost['title']; ?> </p>
                                <p>title: <?php echo $singlePost['author']; ?> </p>
                                <p>title: <?php echo $singlePost['text']; ?> </p>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            

        </ul>
        
    </section>
</body>
</html>