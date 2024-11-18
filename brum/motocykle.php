<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" class="motor-obraz">
    <div class="baner"><h1>Motocykle - Moja pasja</h1></div>
    <div class="left">
        <h2>Gdzie pojechać?</h2>
        <dl>
            <?php
            $con = mysqli_connect('localhost','root','','baza.sql');
            $kw1 = "SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM `wycieczki` INNER JOIN zdjecia ON zdjecia.id=wycieczki.zdjecia_id";
            $kw2 = "SELECT COUNT(*) AS 'Liczba' FROM `wycieczki`";

            $query1 = mysqli_query($con, $kw1);
            while($res1 = mysqli_fetch_assoc($query1)){
                echo '<dt>'.$res1["nazwa"].', Rozpoczyna się w '.$res1["poczatek"].' <a href='.$res1["zrodlo"].'.jpg>Zobacz zdjecie</a></dt><dd>'.$res1["opis"].'</dd>';
            }
            ?>

        </dl>
    </div>
    <div class="right">
        <h2>Co kupić?</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR</li>
            <li>Honda VFR</li>
            <li>Honda CBR</li>
            <li>BMW R120</li>
        </ol>
    </div>
    <div class="right">
        <h2>Statystkiki</h2>
        <p>Wpisanych wycieczek: 
        <?php
        $query2 = mysqli_query($con, $kw2);
        while($res2 = mysqli_fetch_assoc($query2)){
           echo $res2["Liczba"];
        }
        mysqli_close($con);
        ?></p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </div>
    <footer>
        <p>Stronę wykonał: Czarek Zadrozny</p>
    </footer>
</body>
</html>
