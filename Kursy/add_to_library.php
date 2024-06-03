<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'kursy');

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['userId'];

// Sprawdzenie, czy przesłano wartość course_id za pomocą metody POST
if (isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];

    // Sprawdzenie, czy kurs jest już w bibliotece użytkownika
    $sql_check = "SELECT * FROM posiadane WHERE id_uzytkownika = ? AND id_kursu = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("ii", $user_id, $course_id);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows == 0) {
        // Dodanie kursu do biblioteki użytkownika
        $sql = "INSERT INTO posiadane (id_uzytkownika, id_kursu) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $course_id);

        if ($stmt->execute()) {
            echo "Kurs został dodany do twojej biblioteki.";
        } else {
            echo "Wystąpił błąd podczas dodawania kursu: " . $conn->error;
        }
    } else {
        echo "Kurs jest już w twojej bibliotece.";
    }

    $stmt_check->close();
    $stmt->close();
} else {
    echo "Błąd: Nie przesłano wartości course_id.";
}

$conn->close();

header("Location: kursy.php");
exit();
?>
