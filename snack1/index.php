<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->


<?php 
$partite = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Dinamo Sassari',
        'punti_casa' => 75,
        'punti_ospite' => 68
    ],
    [
        'squadra_casa' => 'Reyer Venezia',
        'squadra_ospite' => 'Pallacanestro Varese',
        'punti_casa' => 82,
        'punti_ospite' => 77
    ],
    [
        'squadra_casa' => 'Pallacanestro Trieste',
        'squadra_ospite' => 'Aquila Trento',
        'punti_casa' => 65,
        'punti_ospite' => 70
    ]
];

/* echo $partita . ' - ' .  ; */

foreach ($partite as $key => $partita) {

    echo '<p>' . $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '</p>';

};
?>