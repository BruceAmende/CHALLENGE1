<?php
//Deze regel moet blijven staan
require('include/functions.php');

 


//Stopt de met het formulier geposte data in variabelen
$naam = $_POST["naam_student"];
$klas = $_POST["klas"];
$aantal_minuten = $_POST["aantal_minuten"];
$reden_student = $_POST["reden_student"];

$sqlVoegToe =  "INSERT INTO te_laat (naam_student, klas, aantal_minuten, reden_student)
VALUES ('$naam', '$klas', '$aantal_minuten', '$reden_student')"; // vul hier de querysting in voor het toevoegen van een te laat melding


// Roep de functie voegToe aan met als argument de variabele $sqlVoegToe
 voerUit($sqlVoegToe);