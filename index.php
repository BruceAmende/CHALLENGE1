<?php
include('include/header.php');
require('include/functions.php');


?>

<body>
    <main style="width: 900px; margin: 20px auto;">
        <?php
        // alle gegevens uit de table worden opgehaald en in de array $students gestopt
        $students = haalAllesOp();
        ?>
        <h4>Overzicht studenten die te laat waren</h4>
        <table class="table table-striped">
            <tr>
                <th nowrap>Naam student</th>
                <th>Klas</th>
                <th nowrap>Minuten te laat</th>
                <th>Reden te laat</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            foreach ($students as $student) { ?>
                <tr>
                    <td >
                        <?php $id = $student['id']; echo $student['naam_student'];  ?>
                    </td>
                    <td>
                    <?php echo $student['klas'];   ?>
                    </td>
                    <td  style="color:white;" class="<?php if($student['aantal_minuten'] > 30) { echo 'ergtelaat'; } ?>"> 
                    <?php
                    if('aantal_minuten' > 30){
                        
                    }
                    // <td> Als een student meer dan 30 minuten te laat komt moet de cel de class 'ergtelaat' krijgen. Anders is de class 'telaat'
                     echo $student['aantal_minuten'];  
                    ?>
                    </td>
                        
                    <td>
                    <?php echo $student['reden_student'];  ?>
                    </td>
                    <td>
                    <a href="verwijder.php?id=<?php echo $student['id']; ?>"  class="btn btn-danger">Verwijder</a></td>
                </tr>
            <?php
            } // einde foreach 
            ?>
        </table>
        <br>
        <a href="nieuw.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a>


        <!-- Hieronder komt de statistieken tabel van stats.php -->

          <?php  $sqlHoogste = "SELECT MAX(aantal_minuten) AS statistiek 
                                  FROM te_laat;"; 
                      $hoogste = haalStatistiek($sqlHoogste);
                $sqlGemiddeld = "SELECT AVG(aantal_minuten) AS 'statistiek'
                                  FROM te_laat";
                      $gemiddeld = haalStatistiek($sqlGemiddeld);
                $sqlTotaal = "SELECT SUM(aantal_minuten) AS 'statistiek'
                                  FROM te_laat";
                      $totaal = haalStatistiek($sqlTotaal); ?>
            <br>
            <br>
            <br>

            <table class="table table-striped">
    <thead>
        <tr>
            <th rowspan="2">Statistieken</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Hoogste aantal minuten te laat</td>
            <td><?php echo $hoogste; ?></td>
        </tr>
        <tr>
            <td>Gemiddeld aantal minuten</td>
            <td><?php echo $gemiddeld;  ?></td>
        </tr>
        <tr>
            <td>Totaal aantal minuten</td>
            <td><?php echo $totaal; ?></td>
        </tr>
    </tbody>
</table>

<br><br><br>
            <br>
            <br>
            <br>

            



        

    </main>

</body>

</html>