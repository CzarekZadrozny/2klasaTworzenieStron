<?php
setcookie("ciastek",1,time()+3,"/")
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="baner">Podróże z uśmiechem</div>

        <div class="ciasteczk"><?php
            if(empty($_COOKIE["ciastek"])){
                echo 'Witaj! Nasza strona korzysta z ciasteczek';
            }
            elseif($_COOKIE["ciastek"] == 1){
                echo 'Witaj ponownie';
            }
            ?></div>
    </header>
    <main>
        
        <div class="lewy">
            <h2>Nasze wycieczki</h2>
            <ol>
                <li>Wycieczki autokarowe</li>
                <ul>
                    <li>Po Polsce</li>
                    <li>Do Niemiec i Czech</li>
                </ul>
                <li>Samolotem</li>
                <ul>
                    <li>Grecja</li>
                    <li>Barcelona</li>
                    <li>Warszawa</li>
                    <li>Wenecja</li>
                </ul>
            </ol>

            <h2>Pobierz dokumenty</h2>

           <p> <a href="regulamin.txt">Pobierz Regulamin</a> </p>

           <p><a href="http://galeria.pl/">Zdjęcia z naszych wycieczek</a></p>
        </div>
        <div class="prawy">
            <table>
                <tr>
                    <td><img src="polska.jpg" alt="Zwiedzanie krakowa"></td>
                    <td><img src="wlochy.jpg" alt="Wenecja i nie tylko"></td>
                </tr>
                <tr>
                    <td><img src="grecja1.jpg" alt="Gorace greckie wyspy"></td>
                    <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona"></td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <div class="stopka">
            Strone przygotował: Czarek 
        </div>
    </footer>
    
</body>
</html>
