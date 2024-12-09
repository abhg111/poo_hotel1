<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    
</body>
</html>

<h1>POO Hotels</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$hilton = new Hotel ("Hilton", "10 route de la Gare", "Strasbourg", "67000");
$regent = new Hotel ("Regent", "15 rue de la seine", "Paris", "75000");
$chambre1 = new Chambre ("Chambre : 1", "2 lits", 120, false, $hilton);
$chambre2 = new Chambre ("Chambre : 2", "2 lits", 120, false, $hilton);
$chambre3 = new Chambre ("Chambre : 3", "2 lits", 120, false,$hilton , true);
$chambre4 = new Chambre ("Chambre : 4", "2 lits", 120, false,$hilton);
$chambre5 = new Chambre ("Chambre : 5", "2 lits", 120, false,$hilton);
$chambre16 = new Chambre ("Chambre : 16", "2 lits", 120, true,$hilton,);
$chambre17 = new Chambre ("Chambre : 17", "2 lits", 120, true,$hilton, true);
$chambre18 = new Chambre ("Chambre : 18", "2 lits", 120, true,$hilton);
$chambre19 = new Chambre ("Chambre : 19", "2 lits", 120, true,$hilton);

$micka = new Client ("Micka","MURMANN");
$virgile = new Client ("Virgile","GIBELLO");


$r1 = new Reservation ($chambre17, $virgile ,"01-01-2021", "01-01-2021");
$r2 = new Reservation ($chambre3, $micka ,"11-03-2021", "15-03-2021");
$r3 = new Reservation ($chambre4, $micka ,"01-04-2021", "17-04-2021");




echo $hilton->getInfos();
echo $hilton->afficherReservations();
echo $regent->afficherChambre();
echo $micka->afficherReservations();
echo $hilton->getStatus();
