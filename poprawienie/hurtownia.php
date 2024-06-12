<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Hurtownia Podzespołów</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 80%;
    max-width: 600px;
  }
  select, button {
    padding: 10px;
    margin: 10px 0;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  button {
    background-color: #28a745;
    color: white;
    cursor: pointer;
  }
  button:hover {
    background-color: #218838;
  }
  .result p {
    padding: 10px;
    border-bottom: 1px solid #ddd;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Wybierz Producenta</h1>
  <form method="POST">
    <select name="producent" required>
      <option value="">Wybierz producenta</option>
      <?php
      $conn = new mysqli('localhost','root','', 'hurtownia');
      if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
      }

      $sql = "SELECT id, nazwa FROM producenci";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['id'] . "'>" . $row['nazwa'] . "</option>";
        }
      }
      $conn->close();
      ?>
    </select>
    <button type="submit">Pokaż podzespoły</button>
  </form>

  <div class="result">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $producent = $_POST['producent'];

      $conn = new mysqli('localhost', 'root', '', 'hurtownia');
      if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
      }

      $sql = "SELECT nazwa, dostepnosc, cena FROM podzespoly WHERE producenci_id = $producent";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<p>" . $row['nazwa'] . " - CENA: " . $row['cena'];
          if ($row['dostepnosc'] == 1) {
            echo " (DOSTĘPNY)";
          } else {
            echo " (NIEDOSTĘPNY)";
          }
          echo "</p>";
        }
      } else {
        echo "<p>0 wyników</p>";
      }
      $conn->close();
    }
    ?>
  </div>
</div>

</body>
</html>
