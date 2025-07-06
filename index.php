<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Homepage</title>
    <style>
        /* CSS Simples para deixar a página mais bonita */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bem-vindo à Minha Homepage!</h1>
        <p>Esta é uma página de exemplo criada com PHP. Abaixo, você pode nos enviar uma mensagem através do formulário de contato.</p>

        <hr>

        <h2>Formulário de Contato</h2>
        
        <form action="enviar_email.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Seu E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <input type="submit" value="Enviar Mensagem">
        </form>
    </div>

</body>
</html>