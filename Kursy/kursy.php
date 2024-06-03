<?php
session_start();
$conn = new mysqli('localhost', 'root','','kursy');

$sql = "SELECT * FROM kursy";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="baner1">
           <a href="indexu.php"><h1>Kursy</h1></a>
        </div>
        <div class="baner2">
        <?php if (isset($_SESSION['userLogin'])): ?>
                Witaj, <?php echo $_SESSION['imie']; ?>!
                <a href="logout.php"><button>Wyloguj się</button></a>
            <?php else: ?>
                <a href="login.php"><button>Zaloguj się</button></a>
                <a href="rej.php"><button>Zarejestruj się</button></a>
            <?php endif; ?>
        </div>
        <br>
    </header>
    <main>
        <center>
        <div class="main">
        <?php
            if ($result->num_rows > 0) {
                // Wyświetlanie kursów
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "<h3>" . $row["Nazwa"] . "</h3>";
                    echo "<p>" . $row["Opis"] . "</p>";
                    echo "<p>Poziom trudności: " . $row["Poziom_Trudnosci"] . "</p>";
                    if (isset($_SESSION['userLogin'])) {
                        echo "<form method='post' action='moje_kursy.php'>";
                        echo "<input type='hidden' name='course_id' value='" . $row["id"] . "'>";
                        echo "<button type='submit'>Dodaj do biblioteki</button>";
                        echo "</form>";
                    }
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Brak dostępnych kursów.</p>";
            }
            ?>

        </div>
        </center>
        </main>
        <footer>
        Autor: Czarek
    </footer>
</body>
</html>