<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursy-logowanie</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .main{
    
    }
    </style>
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
        Login: <input type="text" name="login" required><br>
        Haslo: <input type="text" name="haslo" required><br>
        <button type="submit">Login</button>
        </form>
        </center>
    <?php 
        $conn = new mysqli('localhost', 'root','','kursy');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            $sql = "SELECT login, id, imie FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['userLogin'] = $row['login'];
                $_SESSION['userId'] = $row['id'];
                $_SESSION['imie'] = $row['imie'];
                header("Location: indexu.php");
            } else {
                echo "Błąd logowania";
            }

        }
        
    ?>
        </div>
    
    </main>
    </center>
    <footer>
        Autor: Czarek
    </footer>
</body>
</html>
