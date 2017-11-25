<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Hymalaya Hotel - Cadastro</title>
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

      <div class="guestInfo">
        <h1>CADASTRO DE HÓSPEDES</h1>

        <form class="" action="cadastro.php" method="post">
          <div class="name">
            <h4>Nome Completo</h4>
            <input type="text" name="Nome" id="nomeInput">
          </div>
          <div class="cpf">
            <h4>CPF</h4>
            <input type="cpf" name="Cpf" id="cpfInput">
          </div>
          <div class="numHospedes">
            <h4>Número de Hóspedes</h4>
            <input type="number" name="numeroHospedes" id="hospedesInput">
          </div>
          <div class="numDias">
            <h4>Dias de hospedagem</h4>
            <input type="number" name="numeroDias" id="diasInput">
          </div>
          <button type="submit" name="button" class="finishButton">HOSPEDAR</button>
        </form>
      </div>
      <div class="guestBanner">
        <img src="../_images/guestBanner.jpg" alt="guest" id="guestBanner">
      </div>

    </div>

    <?php

    if( $_SERVER['REQUEST_METHOD'] == 'POST'){

      $name = $_POST["Nome"];
      $cpf = $_POST["Cpf"];
      $numHospedes = $_POST["numeroHospedes"];
      $numDias = $_POST["numeroDias"];
      $valorDiaria = 95.50;
      $valorTotal = ($valorDiaria * $numHospedes) * $numDias;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "hotel";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO hospede (nome, cpf, numero_de_Hospedes, numero_de_Dias, valor)
      VALUES ('$name', '$cpf', $numHospedes, $numDias, $valorTotal)";

      if ($conn->query($sql) === TRUE) {
        echo "Hóspede(s) Cadastrado(s)!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

}

    ?>

    <footer class="footer">
    <p>Website Developed by Marcos Motta</p>
    </footer>

  </body>
</html>
