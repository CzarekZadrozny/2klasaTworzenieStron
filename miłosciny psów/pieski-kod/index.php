<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_index.css">
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
            Login:
            <input type="text" name="login">
            <br><br>
            hasło:
            <input type="password" name="haslo">
        <br><br>
            <button type="submit">Zaloguj</button>
            lub <a href="dolacz.php">Dolącz</a>
            <br>

            <?php 
            $con = new mysqli('localhost','root','','pies');

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $login = $_POST["login"];
            $haslo = $_POST['haslo'];
            
            $zaphaslo = $con->query("SELECT haslo from uzytkownicy where uzytkownicy.login = '$login'");

            $row = $zaphaslo->fetch_assoc();

            $odpowiedz = sha1($haslo);

            if($odpowiedz == $row['haslo']){
                  echo' prawidłowo';
            }else{
                echo'nie prawidłowo' ;
            }
            }    
            ?>

        </form>
        </div>
        <div class="prawy2">
        <br><br><br><br>
                  <h2>Zapraszamy wszytstkich</h2>
                    <ol>
                        <li>włascicieli psów</li>
                        <li>weterynarzy</li>
                        <li>zoofili</li>
                     </ol> 
        </div>
    </main>
    <footer>
        <div class="stopka">
            Strone wykonał: Czadek
        </div>
    </footer>
    
</body>
</html>