<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'kursy');

if (isset($_SESSION['userId'])) {
    $user_id = $_SESSION['userId'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['course_id'])) {
            $course_id = $_POST['course_id'];

            $sql_check = "SELECT * FROM posiadane WHERE id_uzytkownika = ? AND id_kursu = ?";
            $stmt_check = $conn->prepare($sql_check);
            $stmt_check->bind_param("ii", $user_id, $course_id);
            $stmt_check->execute();
            $result_check = $stmt_check->get_result();

            if ($result_check->num_rows == 0) {
                $sql = "INSERT INTO posiadane (id_uzytkownika, id_kursu) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ii", $user_id, $course_id);

                if ($stmt->execute()) {
                    
                } else {
                    echo "Wystąpił błąd podczas dodawania kursu: " . $conn->error;
                }
            } else {
                echo "Kurs jest już w twojej bibliotece.";
            }
        } else {
            echo "Błąd: Brak danych o kursie.";
        }
    }

    $sql = "SELECT kursy.id, kursy.Nazwa, kursy.Opis, kursy.Poziom_Trudnosci 
            FROM posiadane 
            JOIN kursy ON posiadane.id_kursu = kursy.id 
            WHERE posiadane.id_uzytkownika = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    header("Location: login.php");
    exit();
}
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
            <?php if ($result->num_rows > 0): ?>
                <ul>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <li>
                            <h3><?php echo $row['Nazwa']; ?></h3>
                            <p><?php echo $row['Opis']; ?></p>
                            <p>Poziom trudności: <?php echo $row['Poziom_Trudnosci']; ?></p>
                            <form method="post" action="moje_kursy.php">
                                <input type="hidden" name="course_id" value="<?php echo $row['id']; ?>">
                            </form>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>Nie masz jeszcze żadnych kursów w swojej bibliotece.</p>
                <a href="kursy.php"><button>Przejdź do kursów</button></a>
            <?php endif; ?>
        </div>
            </center>
    </main>
    <footer>
        Autor: Czarek
    </footer>
</body>
</html>
