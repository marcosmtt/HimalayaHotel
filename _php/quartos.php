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

        <form class="searcherForm" action="quartos.php" method="post">
        <div class="searcher">
          <h4>Filtrar</h4>
          <input type="text" name="searcher" value="" placeholder="Nome do hóspede">
          <button type="submit" id="submitBtn" name="srchButton" value="filter">Pesquisar</button>
        </div>
      </form>

    <footer class="footer">
    <p>Website Developed by Marcos Motta</p>
    </footer>


<?php

  include "config.php";


  if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    $filterValue = $_POST["searcher"];
    $sql = "SELECT * FROM hospede WHERE nome LIKE '%$filterValue%'";
    $result = $conn->query($sql);

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
              echo '<td><a href="edit.php?numeroQuarto='.$row["numeroQuarto"].' ">Editar</a></td>';
              echo '<td><a href="quartos.php?delete='.$row["numeroQuarto"].'">Excluir</a></td></tr>';
              echo "</tbody></table>";
              echo "<button type="input";
    }

  } else {

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
        echo '<td><a href="edit.php?numeroQuarto='.$row["numeroQuarto"].' ">Editar</a></td>';
        echo '<td><a href="quartos.php?delete='.$row["numeroQuarto"].'">Excluir</a></td></tr>';

      }
    echo "</tbody></table>";
    }


    if(isset($_GET['delete'])){
    $sql = "DELETE FROM hospede WHERE numeroQuarto =".$_GET['delete'];
    $sql = mysqli_query($conn, $sql);
  }

  $conn->close();

}

 ?>

  </body>
</html>
