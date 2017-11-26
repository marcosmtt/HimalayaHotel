<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Himalaya Hotel - Editar</title>  <link rel="stylesheet" href="../_css/master.css">
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

        <?php


          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hotel";

          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

          }

            if( $_SERVER['REQUEST_METHOD'] == 'GET'){

          $numQuarto = $_GET['numeroQuarto'];

          $sql = "SELECT * FROM hospede WHERE numeroQuarto = $numQuarto";
          $result = mysqli_query($conn, $sql);

          $guestData = $result->fetch_assoc();



        }

         ?>


        <div class="container">

          <div class="guestInfo">
            <h1>EDITAR HOSPEDE</h1>

            <form class="registerForm" action="edit.php" method="post">
              <div class="name">
                <h4>Nome Completo</h4>
                <input type="text" name="Nome" id="nomeInput" value="<?php echo $guestData['nome']?>">
              </div>
              <div class="cpf">
                <h4>CPF</h4>
                <input type="cpf" name="Cpf" id="cpfInput" value="<?php echo $guestData['cpf']?>">
              </div>
              <div class="numHospedes">
                <h4>Número de Hóspedes</h4>
                <input type="number" name="numeroHospedes" id="hospedesInput" value="<?php echo $guestData['numero_de_Hospedes']?>">
              </div>
              <div class="numDias">
                <h4>Dias de hospedagem</h4>
                <input type="number" name="numeroDias" id="diasInput" value="<?php echo $guestData['numero_de_Dias']?>">
              </div>
              <input type="hidden" name="numQuarto" id="numQuarto" value="<?php echo $guestData['numeroQuarto']?>">
              <button type="submit" name="button" class="finishButton">Atualizar</button>
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
      $numQuarto = $_POST["numQuarto"];
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

      $sql = "UPDATE hospede SET nome='$name', cpf='$cpf', numero_de_Hospedes=$numHospedes, numero_de_Dias=$numDias, valor=$valorTotal WHERE numeroQuarto = $numQuarto";
      $sql = mysqli_query($conn, $sql);

      echo "<script>location.href='quartos.php';</script>";
      $conn->close();


}
?>





  </body>
</html>
