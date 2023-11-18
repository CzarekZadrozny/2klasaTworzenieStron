<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Karty wędkarskie</title>
</head>
<body>
<header>
    <div class="baner">
        <h2>Zgłoszenie na kartę wędkarską</h2>
    </div>
</header>
<main>
    <div class="main">
        <h4>Formularz-karta wędkarska</h4>

        <form method="POST">
            imie: <br>
            <input type="text" name="imie">
            
            <br>

            nazwisko: <br>
            <input type="text" name="nazwisko">

            <br>

            adres: <br>
            <input type="text" size="30" name="adres">

            <br>

            <button type="reset">Czyść</button>

            <button type="submit">Zapisz</button>

            <?php 
          

            if($_SERVER["REQUEST_METHOD"] = ["POST"]){
                
                $con = new mysqli("localhost",'root','','wedkowanie');
    
                $name = $_POST["imie"];
                $lastname = $_POST["nazwisko"];
                $adres = $_POST["adres"];
    
                $zap = $con -> query("INSERT INTO `karty_wedkarskie` (`id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('NULL', '$name', '$lastname', '$adres', NULL, NULL)");
                    
                }
            ?>




        </form>
    </div>
</main>
<footer>
    <div class="lewy">
        <br>
        <h4>Typy łowisk</h4>
        <ul>
            <br>
            
            <li>Zalewy</li>
            <li>Stawy</li>
            <li>Jeziora</li>
            <li>Rzeki</li>
        </ul>
    </div>
    <div class="srodek">
        <img src="wedka.jpg" alt="karta wędkarska">
    </div>
    <div class="prawy">
        <br>
        <br>
        <p>Strone przygotował: Czarek</p>
        <br>
        <br>

        <a href="http://kartawedkarska.pl/">Karta wedkarska</a>
    </div>
</footer>
</body>
</html>