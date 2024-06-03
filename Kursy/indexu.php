<?php
session_start();
$conn = new mysqli('localhost', 'root','','kursy');

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
        <?php if (isset($_SESSION['userLogin'])): ?>
            <div class="main1">
           <button> <a href="moje_kursy.php">Przegladaj swoje kursy</a></button> <br>
           <button> <a href="kursy.php">Przegladaj nowe kursy</a></button>  
            </div>
            <div class="main2">
            <h2>Witamy na stronie z kursami online!</h2>
                <p>Nasza platforma oferuje szeroką gamę kursów z różnych dziedzin, takich jak programowanie, projektowanie, marketing, bazy danych i wiele więcej. Dzięki naszym kursom możesz rozwijać swoje umiejętności zawodowe i osobiste w dowolnym czasie i miejscu.</p>
                <p>Zarejestruj się już teraz, aby uzyskać dostęp do pełnej oferty kursów i rozpocząć swoją przygodę z nauką online. Jeśli masz już konto, zaloguj się, aby kontynuować naukę.</p>
                <h3>Dlaczego warto dołączyć?</h3>
                <ul>
                    <li>Dostęp do setek kursów prowadzonych przez ekspertów</li>
                    <li>Elastyczny harmonogram nauki</li>
                    <li>Certyfikaty ukończenia kursów</li>
                    <li>Społeczność uczących się, z którą możesz się wymieniać doświadczeniami</li>
                </ul>
            </div>

        <?php else: ?>
            <div class="main1">
            <button> <a href="kursy.php">Przegladaj kursy</a></button> <br>
            </div>
            <div class="main2">
            <h2>Witamy na stronie z kursami online!</h2>
                <p>Nasza platforma oferuje szeroką gamę kursów z różnych dziedzin, takich jak programowanie, projektowanie, marketing, bazy danych i wiele więcej. Dzięki naszym kursom możesz rozwijać swoje umiejętności zawodowe i osobiste w dowolnym czasie i miejscu.</p>
                <p>Zarejestruj się już teraz, aby uzyskać dostęp do pełnej oferty kursów i rozpocząć swoją przygodę z nauką online. Jeśli masz już konto, zaloguj się, aby kontynuować naukę.</p>
                <h3>Dlaczego warto dołączyć?</h3>
                <ul>
                    <li>Dostęp do setek kursów prowadzonych przez ekspertów</li>
                    <li>Elastyczny harmonogram nauki</li>
                    <li>Certyfikaty ukończenia kursów</li>
                    <li>Społeczność uczących się, z którą możesz się wymieniać doświadczeniami</li>
                </ul>
            </div>
        <?php endif; ?>
        </main>
        <footer>
        Autor: Czarek
    </footer>
</body>
</html>