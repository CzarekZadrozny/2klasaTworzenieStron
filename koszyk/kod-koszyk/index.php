<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <header>
        <div class="baner">
            <center>
                <h1>Hurtownia z najlepszymy cenami</h1>
            </center>
        </div>
    </header>

    <main>
        <div class="lewy">
            <h2>Nasze ceny</h2>
            <?php 
            $con = new mysqli('localhost','root','','sklep');
            $wyn1 = $con->query('SELECT nazwa, cena FROM `towary` LIMIT 4;');
            
            while($tow = mysqli_fetch_array($wyn1)){
                echo'
            <table>
                <center>
                <tr>
                    <td>'.$tow['nazwa'].'</td>
                    <td>'.$tow["cena"].'</td>
                </tr>
                </center>
            </table>';

            }
               $con->close();     
            ?>
        </div>

        <div class="center">
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
            $con = new mysqli('localhost','root','','sklep');

            $liczba = $_POST['razy'];
            $artykuł = $_POST['art'];
                
                
            $cena = $con->query('SELECT cena FROM `towary` WHERE id ="'.$artykuł.'"');
            $cena1 = $cena->fetch_assoc();

            $wynik = floatval($cena1["cena"]) * $liczba;
            echo'wartosc zakupów: '. $wynik .' zł';
            
            ?>

        </div>
         </form>

        <div class="prawy">
            <h2>Kontakt</h2>

            <br>

            <img src="zakupy.png" alt="Hurtownia">

            <br>

            <a href="mailto: hurt@poczta2.pl">hurt@poczata2.pl</a>.
        </div>
    </main>

    <footer>

        <div class="stopka">
        <H4>Witryne wykonał:Czarek Zadrozny</H4>
        </div>
    </footer>
</body>
</html>