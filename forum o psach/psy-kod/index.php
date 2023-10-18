<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
<div class="baner">
    <h1>Forum miłosnikow psów</h1>
</div>
    </header>

    <main>

    <div class="prawy">
        <br>

        <form method="POST">
   <textarea name="odp" cols="40" rows="4"></textarea> <br>

   <button type="submit" name="btn">Dodaj odpowiedz</button>
</form>


    <h2>Odpowiedzi na pytania</h2>

<ol>
    <?php

    if($_SERVER["REQUEST_METHOD"] = "POST"){
     $con = new mysqli('localhost','root','','forumpsy');

    $odp = $_POST["odp"];

    $zap = $con-> prepare("INSERT INTO odpowiedzi(odpowiedz, Pytania_id, konta_id) value(?,1,5)");

    $zap->bind_param("s",$odp);

    $zap->execute();
    }

    $wyn2 = $con->query("SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi INNER JOIN konta ON konta.id = odpowiedzi.konta_id WHERE odpowiedzi.Pytania_id = '1'");

    while($rel = mysqli_fetch_array($wyn2)){
        echo'<li>'. $rel["odpowiedz"] .'</li><br><hr><br>';
    };
    
    $con->close();

    ?>
    </ol>
    </div>


<div class="lewy">

    <img src="Avatar.png" alt="Użytkownik forum">

    <?php
     
    $con = new mysqli('localhost','root','','forumpsy');
    $zap = $con -> query("SELECT konta.nick, konta.postow, pytania.pytanie from konta INNER JOIN pytania on pytania.id=konta.id WHERE konta.id = '1'");

    $uz = $zap->fetch_assoc();

    echo'<br><br><b>Uzytkownik:'.$uz["nick"].'</b><br><br>
    '.$uz["postow"].'postów na forum <br><br>
    '.$uz["pytanie"].'<br><br>';

    ?>
       <video controls="controls" loop width="100%"">
        <source src="video.mp4" type="video/mp4" />
       </video>
</div>

    </main>

    <footer>
<div class="stopka">

Autor:
<a href="https://pl.wikipedia.org/wiki/Max_Verstappen">Czarek Zadrozny</a>
</div>
    </footer>
    
</body>
</html>