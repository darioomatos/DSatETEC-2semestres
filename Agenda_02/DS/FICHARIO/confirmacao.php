<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Confirmado - Lojas Brincos e Companhia</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="estilo.css"> -->
</head>

<body>
    <div class="w3-container w3-teal">
        <h1>Cadastro Confirmado</h1>
    </div>

    <div class="w3-container">
        <?php
        // Verifica se o formulário foi enviado
        if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
            // Armazena os dados enviados em variáveis
            $nome = $_POST['getNome'];
            $sobrenome = $_POST['getSobrenome'];
            $email = $_POST['getEmail'];
            $formacao = $_POST['getFormacao'];
            $emprego = $_POST['getEmprego'];

            // Exibe uma mensagem de confirmação e os dados cadastrados
            echo "<p class='w3-text-green'>Cadastro confirmado com sucesso!</p>";
            echo "<p class='w3-text-teal'><b>Nome:</b> $nome $sobrenome</p>";
            echo "<p class='w3-text-teal'><b>Email:</b> $email</p>";
            echo "<p class='w3-text-teal'><b>Formação:</b> $formacao</p>";
            echo "<p class='w3-text-teal'><b>Último emprego:</b> $emprego</p>";
        } else {
            // Se o formulário não foi enviado, exibe uma mensagem de erro
            echo "<p class='w3-text-red'>Erro: o formulário não foi enviado.</p>";
        }
        ?>
    </div>
</body>

</html>