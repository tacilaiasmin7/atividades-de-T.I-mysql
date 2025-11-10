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
  margin: 0;
  padding: 0;
  color: #003366;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
}

/* Cabeçalho */
h2 {
  background-color: #0074cc;
  color: white;
  text-align: center;
  padding: 15px 25px;
  border-radius: 8px;
  margin-top: 40px;
  box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
  font-size: 1.8em;
  letter-spacing: 1px;
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
  font-size: 14px;
}

/* Foco */
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
  font-size: 14px;
}

input[type="submit"]:hover,
button:hover {
  background-color: #005fa3;
  transform: scale(1.05);
}

/* Rodapé */
footer {
  margin-top: auto;
  padding: 15px;
  color: #003366;
  font-size: 15px;
  text-align: center;
  font-weight: bold;
}

/* Animação suave ao carregar */
form, h2 {
  animation: fadeIn 1s ease;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}

  </style>
</head>

<body>
  <h2> Campanha Novembro Azul 💙</h2>
  <form action="bancodedados2.php?campanha=agendamento&&versao=1.0" method="post">

    <label> Nome: </label><br>
    <input type="text" name="nome" required><br><br>

    <label> Idade: </label><br>
    <input type="number" name="idade" required><br><br>

    <label> CPF: </label><br>
    <input type="text" name="cpf" minlength="11" maxlength="11" required><br><br>

    <label> Data para Atendimento:</label><br>
    <input type="date" name="data" required><br><br>

    
    

    <input type="submit" value="Enviar">
    <button type="button" onclick="window.location.reload()">Novo Agendamento</button>
  </form>
</body>
</html>