<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytowka</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <div class="baner">
            <h1>Wizytowki pracownikow</h1>

            <form method="post">
                <p><input type="number" name="idPracownika" id="idPracownika" value="1" min="1" max="9">
                <button type="submit">WYŚWIETL</button></p>
            </form>
        </div>
    </header>

    <main>
        <center>
            <?php 

            $IdPracownika = $_POST["idPracownika"];
            $con = new mysqli('localhost','root','','firma');
            $zap = $con->query("SELECT imie, nazwisko, adres, miasto, id FROM pracownicy WHERE id = '$IdPracownika'");

            $us=$zap->fetch_assoc();

            echo'<div class="wizytowka"> <img src="'.$us["id"] .'.jpg" alt="pracownik" style="width:100%;padding-bottom:20px;"> <h2> '. $us["imie"].' '. $us["nazwisko"].'</h2> 
                 <h4> Adres: </h4> '.$us["adres"] .', '.$us["miasto"].'</div>
            ';
            $con->close();
            ?>
        </center>
    </main>

    <footer>
        <div class="stopka-lewo">
            <img src="obraz.jpg"  alt="pracownicy firmy">
        </div>
        <div class = "stopka-prawo">
        Osoby ktore nie podpisały RODO:
        <?php 
        $con = new mysqli('localhost', 'root','','firma');
        $zap = $con->query("SELECT imie, nazwisko from pracownicy where czyRODO = 0 ");


        while ($row = mysqli_fetch_array($zap))
        echo'<p>'.$row[0].' '.$row[1].'</p>';

        ?>
        </div>

        <div class="stopka-srodek">
            <p>Autorem wizytownika jest: Czarek Zadrożny</p>

            <a href="http://agencjareklamowa543.pl/ ">Zobacz nasze realizacje</a>
        </div>
        
    </footer>
    
</body>
</html>