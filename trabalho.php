<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho Professora Bárbara</title>

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #005bea, #00c6fb);
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    h2 {
      color: white;
      background-color: rgba(0, 0, 0, 0.2);
      padding: 15px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    form {
      background: #fff;
      padding: 25px 35px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      width: 320px;
      margin-top: 20px;
    }

    label {
      font-weight: bold;
      color: #444;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 14px;
    }

    input[type="submit"],
    button {
      width: 48%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      color: #fff;
      transition: 0.3s ease;
      margin-top: 10px;
    }

    input[type="submit"] {
      background-color: #007bff;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    button {
      background-color: #28a745;
    }

    button:hover {
      background-color: #1e7e34;
    }

    form input:focus {
      outline: none;
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
    }
  </style>
</head>

<body>
  <h2>Doutor Tech</h2>
  <form action="trabalho2.php?campanha=agendamento&&versao=1.0" method="post">

    <label> Nome do cliente: </label><br>
    <input type="text" name="nome" required><br><br>

    <label> Telefone: </label><br>
    <input type="number" name="telefone" required><br><br>

    <label> Aparelho:</label><br>
    <input type="text" name="aparelho" required><br><br>

    <label> Data para Atendimento:</label><br>
    <input type="date" name="data" required><br><br>

    <label>Descrição do Problema:</label><br>
    <input type="text" name="problema"><br><br>

    <input type="submit" value="Enviar">
    <button type="button" onclick="window.location.reload()">Novo Agendamento</button>
  </form>
</body>
</html>