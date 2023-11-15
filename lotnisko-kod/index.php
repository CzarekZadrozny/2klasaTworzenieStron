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
            <?php 
            $con = new mysqli("localhost","root","","lotnisko");
            $zap=$con->query("SELECT * FROM `przyloty`");

            while($dane = mysqli_fetch_array($zap)){
                echo" <table>
                <tr>
                    <td style='width: 20%;'>".$dane["czas"]."</td>
                </tr>
                </table>";
            }

            
            
            
            $con->close();
            
            
            
            ?>
          
            </center>
        </div>
    </main>
    <footer>
        <div class="stopka1">
        <p>Nasza strona korzytsa z ciasteczek</p>    
        </div>
        <div class="stopka2">
            Autor: Czarek Zadrożny
        </div>
    </footer>
    
</body>
</html>