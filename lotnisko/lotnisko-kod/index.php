<?php
setcookie("ciastek",1,time()+3)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="baner1">
            <img src="zad5bg.png" alt="lotniskoi">
            
        </div>
        <div class="baner2">
            <h1>Przyloty</h1>
        </div>
        <div class="baner3">
            <h3>Przydatne linki</h3>
            <a href="kwerendy.txt">Pobierz...</a>
        </div>
    </header>
    <main>
        <div class="main">
            <center>
            <table>
                <tr>
                    <td style='width: 20%'>Czas</td>
                    <td style='width: 20%'>Kierunek</td>
                    <td style='width: 40%'>Numer rejsu</td>
                    <td style='width: 500px'>Status</td>
                </tr>
    <?php 
            $con = new mysqli("localhost","root","","lotnisko");
            $zap=$con->query("SELECT * FROM `przyloty`");

            while($dane = mysqli_fetch_array($zap)){
                echo"
                <tr>
                    <td>".$dane["czas"]."</td>
                    <td>".$dane["kierunek"]."</td>
                    <td>".$dane["nr_rejsu"]."</td>
                    <td>".$dane["status_lotu"]."</td>
                </tr>
                ";
            }
            $con->close();    
    ?>
          </table>
            </center>
        </div>
    </main>
    <footer>
        <div class="stopka1">
        <p><?php
            if(empty($_COOKIE["ciastek"])){
                echo 'Witaj! Nasza strona korzysta z ciasteczek';
            }
            elseif($_COOKIE["ciastek"] == 1){
                echo 'Witaj ponownie';
            }
            ?></p>    
        </div>
        <div class="stopka2">
            Autor: Czarek Zadrożny
        </div>
    </footer>
    
</body>
</html>