<?php
//L' e-commerce vende prodotti per gli animali.
//I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
//L'utente potrà sia comprare i prodotti senza registrarsi, 
//oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

require_once __DIR__ . '/CiboGatti.php';
require_once __DIR__ . '/CiboCani.php';
require_once __DIR__ . '/CiotolaPets.php';

$cibo_umido = new CiboGatti('Oasy', 'Cibo umido', 'Gatto', '12 bustine', '6.50€','Salmone');
var_dump($cibo_umido);

$cibo_secco = new CiboCani('Trainer', 'Cibo secco', 'Cane', '1 sacco', '35.99€', 'Prosciutto crudo');
var_dump($cibo_secco);

$ciotola_piccola = new CiotolaPets('PiuPets', 'Ciotola', 'Cane e Gatto', '2 ciotole', '24.98€', 'Piccola');
var_dump($ciotola_piccola);
?>
