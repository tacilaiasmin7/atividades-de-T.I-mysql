<!DOCTYPE html>
<html lang="pt-BR"> 
    <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Sistema de login</title> 
</head> 
<body> 
        <h2>Sistema de Login com CPF</h2>

    <form method= "POST"> 
        <label>Digite o seu CPF (Apenas números): </label> 
        <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Com 11 dígitos" required>
        <br><br>
        <input type="subimit" name= "Enviar" value= "Cadastrar CPF">
</form>
<hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $cpf = $_POST["cpf"];

if (!ctype_digit($cpf) || strlen($cpf)  != 11) {
    echo "<p>⚠️O CPF deve conter 11 dígitos.</p>";
    exit;
    }

$conn = new mysqli ("localhost", "root", "senha", "validacao", "3306");

if ($conn->connect_error) {

    die ("<p>❌Erro ao conectar:". $conn->connect_error . "</p>");
}
if (isset($POST["cadastrar"])) {
    $sql = "INSERT INTO clientes (cpf) VALUES ('cpf')";
}
if ($conn-> query($sql) === TRUE) {
    echo "<p> ✅CPF cadastrado com sucesso</p>";
} else {
  echo "<p> ⚠️ CPF já cadastrado.</p>";
    }

    $conn->close();
}

    
?>
</body>
</html>