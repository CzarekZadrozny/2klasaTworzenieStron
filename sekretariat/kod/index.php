<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sekretariat</title>
</head>
<body>
  <main>
<?php 
$con = new mysqli('localhost','root','','sekretariat');
$zap = $con->query("SELECT stanowiska.nazwa, stanowiska.opis, imie, nazwisko from `stanowiska` INNER JOIN pracownicy on pracownicy.id = stanowiska.id WHERE stanowiska.id = '2'");

if($zap -> num_rows > 0){
  $prac = $zap->fetch_assoc();

  echo'
  <div class="prawo">  
  <img src="2.jpg" alt="pracownik"><br><b><center><h2>
  '.$prac["imie"].' '. $prac["nazwisko"].'<br></h2>
  '.$prac["nazwa"].'</b></center><br>
  '.$prac["opis"].'</div>';
};


$con->close();
?>


<?php 
  $con  = new mysqli('localhost','root','','sekretariat');

  $zap = $con->query("SELECT imie, nazwisko, adres, miasto, czyRODO, czyBadania FROM `pracownicy` where id = '2'");

  if($zap -> num_rows > 0){
    $prac = $zap->fetch_assoc();

    if($prac["czyRODO"] == '1'){
      $prac["czyRODO"] = "Podpisano";
    }else{
      $prac["czyRODO"] = "Nie podpisano";
    }
    if($prac["czyBadania"] == '1'){
      $prac["czyBadania"] = "Aktualne";
    }else{
      $prac["czyBadania"] = "Nie aktualne";
    }
    

    echo'<div class="Lewo">
      
    <h1>Akta pracownicze</h1>

  <p><b>dane: </b><br><p>

   <p>'. $prac["imie"] .' '. $prac["nazwisko"].' <br></p>

    <hr>

   <p> <b>adres:</b> <br> </p>

   <p>'. $prac["adres"] .'<br> </p>

   <p>'. $prac["miasto"] .'<br></p>

    <hr>

   <p> RODO:'.$prac["czyRODO"]  .'<br></p>

   <p> Badania:'. $prac["czyBadania"] .'<br> </p>

    <hr>

   <p> <b>Dokumenty pracownika</b><br></p>';

  }

  $con->close();
  ?>
    <a href="cv.txt">Pobierz</a>

    <h1>Liczba zatrudnionych pracowników</h1>
    <?php 
  $con = new mysqli('localhost','root','','sekretariat');
  $zap = mysqli_query($con, 'SELECT count(id) from pracownicy');
  while($row = mysqli_fetch_row($zap)){
      echo '<p style="padding-left=10px;">'.$row[0].'</p>';
  }
  $con->close();
    ?>

</div>
</main>
<footer>
<div class="stopka">
  Autorem aplikacji jest: Czarek Zadrożny <br>

  <ul>
    <li>Skontaktuj sie</li>
    <li>Poznaj nasza firmę</li>
  </ul>
</div>

</footer>
    
</body>
</html>