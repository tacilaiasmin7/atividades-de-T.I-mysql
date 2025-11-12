<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Professora Bárbara</title>

    <style>
/* Estilo Novembro Azul 💙 */
body {
  font-family: "Poppins", Arial, sans-serif;
  background: linear-gradient(180deg, #e0f2ff, #b3e0ff);
  margin: 10px;
  padding: 50px;
  color: #003366;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
}

.imagem{
  float: right;
  margin-left: 50%;
}

.container{
  background-color: white;
  border-radius: 10px;
  margin-left:0;
  margin-right: auto;
  width: 50%;
  position: relative;
  top: -350px;
}

/* Título */
h2 {
  background-color: #0074cc;
  color: white;
  text-align: center;
  padding: 15px 25px;
  border-radius: 8px;
  margin-top: 40px;
  box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
}

/* Formulário */
form {
  background-color: white;
  border: 2px solid #0074cc;
  border-radius: 12px;
  padding: 30px 40px;
  margin-top: 25px;
  box-shadow: 0 4px 12px rgba(0, 102, 204, 0.2);
  width: 320px;
  text-align: left;
}

/* Labels e inputs */
label {
  font-weight: bold;
  color: #004080;
}

input[type="text"],
input[type="number"],
input[type="date"] {
  width: 100%;
  padding: 8px 10px;
  margin-top: 4px;
  border: 1px solid #66b2ff;
  border-radius: 6px;
  box-sizing: border-box;
  transition: 0.3s;
}

/* Foco nos campos */
input:focus {
  border-color: #0074cc;
  box-shadow: 0 0 5px rgba(0, 116, 204, 0.4);
  outline: none;
}

/* Botões */
input[type="submit"],
button {
  background-color: #0074cc;
  color: white;
  border: none;
  padding: 10px 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
  font-weight: bold;
  margin-right: 5px;
}

input[type="submit"]:hover,
button:hover {
  background-color: #005fa3;
}

    </style>
</head>

<body>
  <div class="imagem">
  <img src="novembro.jpg" alt="imagem novembro azul" width="100%" height="100%">
  </div>
  <div class="container">
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];
        $data = $_POST["data"];
    }

    // conexão com o banco de dados
    if (!ctype_digit($cpf) || strlen($cpf) !=11) {
      echo "<p>⚠️ O CPF deve conter 11 digitos.</p>";
      exit;
    }
    $conn =  new mysqli ("localhost", "root", "aluno", "novembro", 3307);

    if ($conn->connect_error) {
        die("<p style='color:red;'>Erro na conexão com o banco de dados:" . $conn->connect_error . "</p>");
    }

    // inserir dados 
    $sql = "INSERT INTO versao (nome, idade, cpf, data)
     VALUES ('$nome', '$idade', '$cpf', '$data')";


if ($conn-> query($sql) === TRUE) {
    echo "<h3>📥 Dados Recebidos (POST)</h3>";
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "CPF: $cpf <br>";
    echo "Data: $data <br>";
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

      <h1 style="color: green;">Dicas de Atitudes de prevenção</h1>
      <h2>Consultas médicas e exames:</h2>
      <p>1-Realize exames preventivos regularmente, começando aos 50 anos. <br>
        2-Se tiver histórico familiar, comece aos 45 anos. <br>
        3-Homens com histórico familiar de câncer de próstata ou outras doenças genéticas devem procurar o urologista mais cedo. <br>
        4-Converse com seu médico sobre a realização de exames como o PSA e o toque retal. </p><br>

   <button onclick="window.history.back()">Voltar</button><br>
  </div>
</body>

</html>