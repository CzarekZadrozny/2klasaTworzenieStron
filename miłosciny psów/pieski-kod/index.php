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
        <div class="baner">
            <h1>Forum wielbicilei psów</h1>
        </div>
    </header>
    <main>
        <div class="lewy">
            <img src="spies.jpg" alt="foksterierl">
        </div>
        <div class="prawy1">
            <form method="post">
                
            <h2>Zaloguj lub dołącz</h2>
            e-mail:
            <input type="text" name="Login">
            <br><br>
            hasło:
            <input type="password" name="haslo">
        <br><br>
            <button type="submit">Zaloguj</button>
            lub <a href="dolacz.html">Dolącz</a>
            <br>

            <?php 
            $con = new mysqli('localhost','root','','pies');

            if($_SERVER)

            $login = $_POST["Login"];
            $haslo = $_POST["haslo"];
            $haslo1 = sha1($haslo);

            
            $haslo2 = $con->query("SELECT haslo from uzytkownicy where login = '$login'");

            $row = $haslo2 -> fetch_assoc();

            if($haslo1 == $row['haslo']){
                  echo'siejma';
            }else{
                echo 'nie działa';
            }



            
            
            
            
            
            
            
            
            
            ?>

        </form>
        </div>
    </main>
    <footer>
        <div class="stopka">
            Strone wykonał: Czadek
        </div>
    </footer>
    
</body>
</html>