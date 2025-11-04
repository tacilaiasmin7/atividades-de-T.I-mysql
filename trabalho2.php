<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Professora Bárbara</title>

    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #00c6fb, #005bea);
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
      }

      h3 {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.3);
        padding: 10px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
      }

      div {
        background: #fff;
        padding: 25px 35px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        width: 350px;
        margin-top: 20px;
        line-height: 1.6;
      }

      button {
        margin-top: 20px;
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
      }

      button:hover {
        background-color: #0056b3;
      }
    </style>
</head>

<body>
  <div>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $aparelho = $_POST["aparelho"];
        $data = $_POST["data"];
        $problema = $_POST["problema"];
    }

    // conexão com o banco de dados

    $conn =  new mysqli ("localhost", "root", "aluno", "doutortech", "3307");

    if ($conn->connect_error) {
        die("<p style='color:red;'>Erro na conexão com o banco de dados:" . $conn->connect_error . "</p>");
    }

    // inserir dados 
    $sql = "INSERT INTO produtos (nome, telefone, aparelho, data, descricao)
     VALUES ('$nome', '$telefone', '$aparelho', '$data', '$problema')";


if ($conn-> query($sql) === TRUE) {
    echo "<h3>📥 Dados Recebidos (POST)</h3>";
    echo "Nome do Cliente: $nome <br>";
    echo "Telefone: $telefone <br>";
    echo "Aparelho: $aparelho <br>";
    echo "Data: $data <br>";
    echo "Problema: $problema <br>";
} else{
    echo "<p style= 'color: red;'>❌ Erro ao salvar:" . $conn->error . "</P>";
}

$conn->close();


    echo "<h3>🛍️ Informações da Campanha</h3>";
    if (isset($_GET['campanha']) && isset($_GET['versao'])) {
        $campanha = $_GET['campanha'];
        $versao = $_GET['versao'];
        echo "Campanha: $campanha <br>";
        echo "Versão: $versao <br>";
    }
   ?>
   <button onclick="window.history.back()">Voltar</button><br>
  </div>
</body>

</html>
