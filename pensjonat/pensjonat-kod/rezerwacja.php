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

            $dataPoczatkowa = $_POST['od'];
            $dataKoncowa = $_POST['do'];
            $pok = $_POST['pok'];
            $sezon = $_POST['sezon'];

            //sprawdza czy daty sa dobrze wybrane
        if($dataPoczatkowa >= $dataKoncowa AND $dataPoczatkowa >= date_default_timezone_set('Europe')){
            echo'Prosze wybrac inne daty';
        }else{

            // oblicza liczbe dni wybranych
            $result = round((strtotime($dataKoncowa) - strtotime($dataPoczatkowa)) / 86400);

               //sprawdza rezerwacje 

               $zap2 = $con->query("SELECT * FROM rezerwacje WHERE (data_poczatkowa BETWEEN '$dataPoczatkowa' AND '$dataKoncowa') OR (data_koncowa BETWEEN '$dataPoczatkowa' AND '$dataKoncowa')");
            
               $zajeteOkresy = mysqli_fetch_assoc($zap2);
   
               if(empty($zajeteOkresy)){

            //dodaje rezerwacje

            $zap1 = $con->query("INSERT INTO `rezerwacje` VALUES ( '','$pok', '$result', '$sezon','$dataPoczatkowa','$dataKoncowa')");
                
            // pobiera cene i liczy cene

            $zap = $con->query('Select cena from pokoje where id = '.$pok.'');

            $wyn = mysqli_fetch_array($zap);
        
            if ($sezon == 'lato') {
                $cena=floatval(($wyn['cena']*1.5)*$result);
            }
            else{
                $cena=$wyn['cena']*$result;
            }
            echo'
            Liczba dni:'.$result.'<br>
            Cena:<h3>'. $cena.'zł </h3>'; 
        
        }else{
            echo'Podany termin jest zajety';
        }
    }
        }
            
        
            ?>
            <br>
            <br>
            * w sezonie letnim naliczamy +50% do ceny
           
        </div>

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
    <footer>
        <div class="stopka">
            <center>
                Strone wykonał:Czarek
            </center>
        </div>
    </footer>
</body>

