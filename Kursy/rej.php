<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursy-rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="baner1">
           <a href="indexu.php"><h1>Kursy</h1></a>
        </div>
        <div class="baner2">
            <a href="login.php" target="_blank"><Button>Zaloguj sie</Button></a>
            <a href="rej.php" target="_blank"><button>Zarejestruj sie</button></a>
        </div>
        <br>
    </header>
    <main>
        <div class="main">
            <center>
        <form method="post" action="">
        Imie: <input type="text" name="imie" ><br>
        Nazwisko: <input type="text" name="nazwisko" ><br>
        Login: <input type="text" name="login"> <br>
        Haslo: <input type="text" name="haslo"> <br>
        <button type="submit">Zarejestruj</button>
    </form>
</center>
    <?php
    $conn = new mysqli('localhost', 'root','','kursy');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $tworca = 0;

    $sql = "INSERT INTO uzytkownicy (Imie, Nazwisko, tworca, login, haslo) VALUES ('$imie', '$nazwisko', '$tworca','$login','$haslo')";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy uzytkownik zarejestrowany";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
        </div>
    </main>
    <footer>
        Autor: Czarek
    </footer>
</body>
</html>


