<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styloferta.css">
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
            <h1>Rezerwacja</h1>
            <img src="main.jpg" alt="Pensjonat">
        </div>
        </a>

        <a href="oferta.php">
        <div class="main2">
            <center>
                <h1>Nasza oferta</h1>
            <table>
                <tr>
                    <td style="width:50%">Typ pokoju</td>
                    <td style="width:50%">Cena za noc</td>
                </tr>
            

        <?php 
        $con = new mysqli("localhost","root","","pensjonat");
        $zap = $con->query("SELECT * FROM pokoje");

        while($dane = mysqli_fetch_array($zap)){
            echo'<tr>
                    <td>'.$dane["nazwa"].'</td>
                    <td>'.$dane["cena"].'</td>
            ';
        };
        ?>
        </center>
           </table>
           *dzieci ponizej 6 roku życia nie są liczone
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styloferta.css">
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
            <h1>Rezerwacja</h1>
            <img src="main.jpg" alt="Pensjonat">
        </div>
        </a>

        <a href="oferta.php">
        <div class="main2">
            <center>
                <h1>Nasza oferta</h1>
            <table>
                <tr>
                    <td style="width:50%">Typ pokoju</td>
                    <td style="width:50%">Cena za noc</td>
                </tr>
            

        <?php 
        $con = new mysqli("localhost","root","","pensjonat");
        $zap = $con->query("SELECT * FROM pokoje");

        while($dane = mysqli_fetch_array($zap)){
            echo'<tr>
                    <td>'.$dane["nazwa"].'</td>
                    <td>'.$dane["cena"].'</td>
            ';
        };
        ?>
        </center>
           </table>
           *dzieci ponizej 6 roku życia nie są liczone
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
>>>>>>> c8492db1c21c45b515e66eb5091aadb62dd56314
</html>