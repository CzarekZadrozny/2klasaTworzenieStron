<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <div class="tytuł">
            <br>
            <h1>Czas na grzyby!</h1>
        </div>
        <div class="miniatura">
            <a href="podgrzybek.jpg"><img src="podgrzybek-minatura.jpg" alt="Grzybobranie"></a>
        </div>
    </header>
    <main>
        <div class="lewy">
            <h3>Grzyby Jadalne</h3>
           <?php
           $con = mysqli_connect('localhost','root','','grzybobranie');

           $zap = mysqli_query($con,'SELECT id, nazwa, potoczna from grzyby WHERE jadalny = "1"');

           while ( $x = mysqli_fetch_array($zap)){
            echo"
            <ul>
            
            <li>".$x["id"].".".$x["nazwa"]."(".$x["potoczna"].")</li> <br>
            
            </ul>
            ";
           };
           ?>

            <h3>Polecamy do zup</h3>
            <br>
            <?php
           $zap2 = mysqli_query($con,'SELECT grzyby.potoczna, rodzina.nazwa FROM grzyby JOIN rodzina ON grzyby.rodzina_id = rodzina.id WHERE grzyby.potrawy_id = "4"');

           while($y = mysqli_fetch_array($zap2)){
            echo"
            <ul>
            
            <li>". $y["potoczna"] .", rodzina: " .$y["nazwa"]."</li>
            
            </ul>
            ";
           };
           ?>

        </div>

        <div class="prawy">
            <?php

            $con = mysqli_connect('localhost','root','','grzybobranie');

            $zap3 = mysqli_query($con,'SELECT nazwa_pliku, nazwa FROM grzyby;');

            while($z = mysqli_fetch_array($zap3)){
                echo"
                <img src=".$z['nazwa_pliku']."
                >";
                
            }
            mysqli_close($con)
            ?>
        </div>
    </main>
    <footer>
        <div class="stopka">
            <p> Autor: Czarek Zadrożny</p>
        </div>
    </footer>
    
</body>
</html>