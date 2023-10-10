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
    <    <video controls="controls" loop width="100%">
        <source src="video.mp4" type="video/mp4" />
       </video>
</div>
<div class="prawy"></div>

    </main>

    <footer>
<div class="stopka"></div>
    </footer>
    
</body>
</html>