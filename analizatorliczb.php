
<?php
$suma = 0;
$sumaParzystych = 0;
$sumaNieparzystych = 0;
$licznikPodzielnych = 0;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Analiza liczb od 1 do 100</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 0;
            padding: 25px;
            color: #263449;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #00000012;
        }

        h1 {
            text-align: center;
            color: #2457a7;
        }

        .opis {
            text-align: center;
            color: #64748b;
        }

        h2 {
            color: #2457a7;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        .liczba {
            padding: 10px;
            margin: 6px 0;
            background-color: #f8fafc;
            border-left: 4px solid #4c83e3;
            border-radius: 5px;
        }

        .parzysta {
            color: #168052;
            font-weight: bold;
        }

        .nieparzysta {
            color: #b66a13;
            font-weight: bold;
        }

        .podzielna {
            color: #2457a7;
            font-weight: bold;
        }

        .podsumowanie {
            background-color: #edf4ff;
            padding: 18px;
            border-radius: 8px;
            margin-top: 25px;
        }

        .wynik {
            padding: 10px 0;
            border-bottom: 1px solid #d5e2f5;
        }

        .wynik:last-child {
            border-bottom: none;
        }

        .wartosc {
            color: #2457a7;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Analiza liczb od 1 do 100</h1>

    <p class="opis">
        Sprawdzamy, czy liczby są parzyste i czy dzielą się przez 3.
    </p>

    <h2>Sprawdzane liczby</h2>

    <?php
    for ($i = 1; $i <= 100; $i++) {

        echo "<div class='liczba'>";
        echo $i . " - ";

        $suma = $suma + $i;

        if ($i % 2 == 0) {
            echo "<span class='parzysta'>parzysta</span>";
            $sumaParzystych = $sumaParzystych + $i;
        } else {
            echo "<span class='nieparzysta'>nieparzysta</span>";
            $sumaNieparzystych = $sumaNieparzystych + $i;
        }

        if ($i % 3 == 0) {
            echo ", <span class='podzielna'>podzielna przez 3</span>";
            $licznikPodzielnych++;
        }

        echo "</div>";
    }
    ?>

    <div class="podsumowanie">

        <h2>Podsumowanie wyników</h2>

        <div class="wynik">
            Suma wszystkich liczb:
            <span class="wartosc"><?php echo $suma; ?></span>
        </div>

        <div class="wynik">
            Suma liczb parzystych:
            <span class="wartosc"><?php echo $sumaParzystych; ?></span>
        </div>

        <div class="wynik">
            Suma liczb nieparzystych:
            <span class="wartosc"><?php echo $sumaNieparzystych; ?></span>
        </div>

        <div class="wynik">
            Liczb podzielnych przez 3:
            <span class="wartosc"><?php echo $licznikPodzielnych; ?></span>
        </div>

    </div>

</div>

</body>
</html>
