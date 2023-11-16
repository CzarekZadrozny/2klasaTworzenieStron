<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Pensjonat</title>
</head>
<body>
    <header>
        <div class="baner1">
           <h1><p> Pensjonat pod dobrym humorem</p> </h1>
        </div>
        <div class="baner2">
            <h3>
            Kontakt: +48 123 456 789
            <br>
            Pensjonat@gmail.com
            </h3>
        </div>
    </header>
    <main>

        <a href="rezerwacja.php">
        <div class="main">
        <form  method = "POST">
            <h2>Koszt zakupów</h2>                          

            wybierz artykuł:

            <select name="art">
                <option value="1">Zeszyt 60 kartek</option>
                <option value="2">Zeszyt 32 kartek</option>
                <option value="3">Cyrkiel</option>
                <option value="4">Linijka 30 cm</option>
            </select>

            <br>

            Liczba sztuk: 
            <input type="number" name="razy">

            <br>

            <button type="submit">Oblicz</button>
            
            <br>

            <?php 
            $con = new mysqli('localhost','root','','');

            $liczba = $_POST['razy'];
            $artykuł = $_POST['art'];
                
                
            $cena = $con->query('SELECT cena FROM `towary` WHERE id ="'.$artykuł.'"');
            $cena1 = $cena->fetch_assoc();

            $wynik = floatval($cena1["cena"]) * $liczba;
            echo'wartosc zakupów: '. $wynik .' zł';
            
            ?>
           
        </div>
        </a>

        <a href="oferta.php">
        <div class="main2">
            <h1>Nasza oferta</h1>
            <img src="main.jpg" alt="Pensjonat">
        </div>
        </a>

        <a href="index.php">
        <div class="main3">
            <h1>Strona główna</h1>
            <img src="main.jpg" alt="Pensjonat">
        </div>
        </a>

    </main>
    
</body>
</html>