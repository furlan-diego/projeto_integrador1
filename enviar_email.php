<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Pegando os dados do formulário
    // A variável superglobal $_POST é um array que contém os dados enviados.
    // Usamos o 'name' de cada campo do formulário como chave para pegar o valor.
    $nome = $_POST['nome'];
    $email_remetente = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // 2. Montando o e-mail
    $destinatario = "seu-email@dominio.com"; // <-- MUITO IMPORTANTE: Coloque aqui o seu e-mail!

    // Corpo do e-mail que você vai receber
    $corpo_email = "Você recebeu uma nova mensagem de contato:\n\n";
    $corpo_email .= "Nome: " . $nome . "\n";
    $corpo_email .= "Email: " . $email_remetente . "\n";
    $corpo_email .= "Assunto: " . $assunto . "\n";
    $corpo_email .= "Mensagem:\n" . $mensagem;

    // Cabeçalhos do e-mail (para garantir que seja enviado corretamente)
    $headers = "From: " . $email_remetente . "\r\n";
    $headers .= "Reply-To: " . $email_remetente . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 3. Enviando o e-mail
    // A função mail() é a função nativa do PHP para enviar e-mails.
    // Ela retorna 'true' se o envio foi bem-sucedido e 'false' se falhou.
    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "<h1>Mensagem enviada com sucesso!</h1>";
        echo "<p>Obrigado por entrar em contato, " . $nome . ". Responderemos em breve.</p>";
        echo "<a href='index.php'>Voltar para a Homepage</a>";
    } else {
        echo "<h1>Falha no envio do e-mail.</h1>";
        echo "<p>Desculpe, ocorreu um erro. Por favor, tente novamente mais tarde.</p>";
        echo "<a href='index.php'>Voltar para a Homepage</a>";
    }

} else {
    // Se alguém tentar acessar este arquivo diretamente pelo navegador, sem enviar o formulário
    echo "<h1>Acesso Negado!</h1>";
    echo "<p>Esta página deve ser acessada através do formulário de contato.</p>";
}