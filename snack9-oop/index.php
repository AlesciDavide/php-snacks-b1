<!-- Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.
Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati. -->

<?php 
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Membership.php';


$Membership = new Membership("platinum");

$premiumUser = new PremiumUser("Meiyer", "123456789", $Membership);

var_dump($premiumUser);

?>