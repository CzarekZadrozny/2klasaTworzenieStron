<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_dolacz.css">
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
                
            <h2>Stwórz konto</h2>

            Stwórz login
            <input type="text" name="Login">
            <br><br>

            Stwórz hasło
            <input type="password" name="haslo">
            <br><br>

            Powtórz hasło
            <input type="password" name="haslo1">
            <br><br>

            <button type="submit">Dołącz</button>

            <br>


            <?php 
            $con = new mysqli('localhost','root','','pies');

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $login = $_POST["Login"];
            $haslo = $_POST["haslo"];
            $haslo3 = $_POST["haslo1"];
            $shahaslo = sha1($haslo);

            if(empty($login) OR empty($haslo)){
                echo'Uzupełnij pola!';

            }else{
                $login1 = $con ->query('SELECT login from uzytkownicy');
                $row = $login1->fetch_assoc();

                if($login === $row['login']){
                    echo'Login juz istnieje';
                }else{

            if($haslo === $haslo3){
                $zap = $con -> query("INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES (NULL, '$login', '$shahaslo')");

                echo 'dodano poprawnie';

            }else{
                echo 'działa nie poprawnie';
            }
            }   }
        }
            ?>
            <br><br>
            <a href="index.php">Wróc nas strone głowna</a>

        </form>
        </div>
        <div class="prawy2">
            <h2>Dlaczego warto dołaczyc na nasze forum?</h2>
            <ol>
                <li>Mamy potwierdzonych specialistów którzy tylko czekaja by ci pomóc </li>
                <li>Wysoki poziom intefesju graficznego</li>
                <li>Oraz wiele innych czynników które sprawiaja ze nasze forum jest najchetniej odwiedzanie w całej POlSCE</li>
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