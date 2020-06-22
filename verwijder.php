<?php
require('include/functions.php');

// Haal het id op dat in de url is meegegeven
$id = $_GET['id'];



$sqlVerwijder = "DELETE FROM te_laat WHERE id= $id";;


// Roep de functie voerUit aan met als argument de variabele $sqlVerwijder;
voerUit($sqlVerwijder);