<h1>POO Hotels</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$hilton = new Hotel ("Hilton", "10 route de la Gare", "Strasbourg", "67100");
$regent = new Hotel ("Regent", "15 rue de la seine", "Paris", "75000");
$chambre1 = new Chambre ("Chambre 1", " 2 lits", "120", "non", $hilton);
$chambre2 = new Chambre ("Chambre 2", " 2 lits", "120", "non", $hilton);
$chambre3 = new Chambre ("Chambre 3", " 2 lits", "120", "non", $hilton);
$chambre4 = new Chambre ("Chambre 4", " 2 lits", "120", "non", $hilton);
$chambre1 = new Chambre ("Chambre 1", " 2 lits", "120", "non", $hilton);
$chambre17 = new Chambre ("Chambre 1", " 2 lits", "120", "non", $hilton);

$micka = new Client ("Micka","Murmann");
$virgile = new Client ("Virgile","GIBELLO");


$r1 = new Reservation ($chambre1, $virgile ,"01-01-2021", "01-01-2021");
$r2 = new Reservation ($chambre3, $micka ,"11-03-2021", "11-03-2021");
$r3 = new Reservation ($chambre3, $micka ,"01-04-2021", "01-04-2021");




//var_dump($hilton);
//var_dump($chambre1);

//var_dump($micka);  

//echo $hilton->afficherNbChambre();

//echo $hilton->afficherNbChambre();

echo $hilton->getInfos();
echo $regent->getInfos();


echo $micka->afficherReservations();
//echo $chambre1->addReservation($r1);
//echo $chambre1->afficherReservations();
//echo $virgile->afficherReservations($chambre2);
 //echo $r1;