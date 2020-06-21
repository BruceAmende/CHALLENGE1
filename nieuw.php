<!-- Maak een html formulier om een nieuwe te laat melding te versturen naar insert.php -->
<?php
include('include/header.php');
require('include/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Weer een student te laat</title>
</head>
<body>

<main style="width: 600px; margin: 20px auto;">
        <h4 style="text-align:center;">Nieuwe melding te late student</h4>

        <form class="cursusform" method="post" action="insert.php">
            <div class="form-group">
                <label for="naam_student">Naam student</label>
                <input type="text" class="form-control" id="naam_student" name="naam_student" required="">
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>

                <select class="form-control" id="klas" name="klas">
                    <option>9A</option><option>9B</option><option>9C</option><option>9D</option>                </select>
            </div>
            <div class="form-group">
                <label for="aantal_minuten">Aantal minuten te laat</label>


                <select class="form-control" id="aantal_minuten" name="aantal_minuten">
                    <option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option><option>60</option>                </select>


            </div>
            <div class="form-group">
                <label for="reden_student">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="reden_student" name="reden_student"></textarea>
            </div>
                                                  
            <button onclick="voegToe()" type="submit" class="btn btn-success">Opslaan</button>
        </form>
    </main>
    
</body>
</html>