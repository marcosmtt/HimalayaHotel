<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Hymalaya Hotel - Quartos</title>
  <link rel="stylesheet" href="../_css/master.css">
  </head>
  <body>
    <header class="header">

      <div class="headerContent">
        <ul id="headerList">

          <div class="logo">
            <a href="index.php">
              <img src="../_images/logo.png" alt="logo" id="logo">
            </a>
          </div>

          <li><a href="../index.php">Home</a></li>
          <li><a href="cadastro.php">Cadastro</a></li>
          <li><a href="quartos.php">Quartos</a></li>
          <li><a href="sobre.php">Sobre</a></li>

        </ul>
      </div>
    </header>

    <div class="container">
      <table class="tabelaQuartos">
        <thead>
          <tr id="tabHospedes">
            <th>Número do Quarto</th>
            <th>Hóspede Responsável</th>
            <th>CPF</th>
            <th>Número de Hóspedes</th>
            <th>Diárias</th>
            <th>Valor Total</th>
            <th colspan="2">Ação</th>
          </tr>
        </thead>
      <tbody>
    </div>

    <footer class="footer">
    <p>Website Developed by Marcos Motta</p>
    </footer>

<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hotel";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connectoin failed:" . $conn->connect_error);
  }

  $sql = "SELECT * FROM hospede";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $numQuarto = $row["numeroQuarto"];
      $nome = $row["nome"];
      $cpf = $row["cpf"];
      $numHospedes = $row["numero_de_Hospedes"];
      $numDias = $row["numero_de_Dias"];
      $valor = $row["valor"];

      echo "<tr><td>" .$numQuarto."</td>";
      echo "<td>" .$nome. "</td>";
      echo "<td>" .$cpf. "</td>";
      echo "<td>" .$numHospedes. "</td>";
      echo "<td>" .$numDias. "</td>";
      echo "<td>" .$valor. "</td>";
      echo '<td><a href="#">Alterar</a></td>';
      echo '<td><a href="#">Excluir</a></td></tr>';

    }
    echo "</tbody></tabel>";
  }

  $conn->close();

 ?>

  </body>
</html>
