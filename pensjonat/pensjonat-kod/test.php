<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylr.css">
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

        
        <div class="main">
        <form  method = "POST">
            <h2>Rezerwacja</h2>                          

            Wybierz typ pokoju:

            <select name="pok">
                <option value="1">Jednoosobowy</option>
                <option value="2">Dwóosobowy</option>
                <option value="3">Trzyosobowy</option>
            </select>

            <br><br>

            od:
            <input type="date" name="od" value="17.11.23">
            <br><br>
            do:
            <input type="date" name="do" value="17.11.23">

            <br><br>
            Sezon: 
            <select name="sezon">
                <option value="lato">Lato</option>
                <option value="zima">Zima</option>
            </select>

            <br><br>

            <button type="submit">Rezerwuj</button>
            
            <br><br>

            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $con = new mysqli('localhost','root','','pensjonat');

            $od = $_POST['od'];
            $do = $_POST['do'];
            $pok = $_POST['pok'];
            $sezon = $_POST['sezon'];

            $result = strtotime($do);
            

            echo $result;

            }
            ?>
            <br>
            <br>
            * w sezonie letnim naliczamy +50% do ceny
           
        </div>

        <a href="test.php">
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

