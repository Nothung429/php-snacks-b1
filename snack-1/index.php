<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
            "homeTeam" => "Los Angeles Lakers",
            "awayTeam" => "Golden State Warriors",
            "homeScore" => "86",
            "awayScore" => "74",
        ],
        [
            "homeTeam" => "Miami Heat",
            "awayTeam" => "Cleveland Cavaliers",
            "homeScore" => "32",
            "awayScore" => "98",
        ],
        [
            "homeTeam" => "Boston Celtics",
            "awayTeam" => "Brooklyn Nets",
            "homeScore" => "60",
            "awayScore" => "82",
        ],
        [
            "homeTeam" => "Chicago Bulls",
            "awayTeam" => "Milwaukee Bucks",
            "homeScore" => "76",
            "awayScore" => "26",
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>NBA Matches</h1>
        <ul>
            <?php for($i = 0; $i < count($matches); $i++) { ?>
                <li><?php echo $matches[$i]['homeTeam']?> - <?php echo $matches[$i]['awayTeam']?> | <?php echo $matches[$i]['homeScore']?> - <?php echo $matches[$i]['awayScore']?></li>
            <?php } ?>
        </ul>
    </body>
</html>