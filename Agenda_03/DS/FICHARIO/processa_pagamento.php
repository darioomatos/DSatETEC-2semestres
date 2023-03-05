<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Madeira e Cia Ltda - Confirmação de Pagamento</title>

</head>

<body>

    <div class="w3-container w3-teal">
        <h2>Confirmação de pagamento</h2>
    </div>

    <?php
    // verifica o medoto de envio.
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
        // Recebe os dados do formulário
        $nome = $_POST['txtNome'];
        $valorCompra = $_POST['txtValorCompra'];
        $formaPagamento = $_POST['cmbPag'];

        // Calcula o desconto de acordo com a forma de pagamento escolhida
        $desconto = match ($formaPagamento) {
            'cartaoCredito' => 0,
            'boleto' => 0.08,
            'deposito' => 0.1,
            default => 0,
        };

        // Calcula o valor final da compra
        $valorFinal = $valorCompra - ($valorCompra * $desconto);

        // Exibe a mensagem de acordo com a forma de pagamento escolhida
        $mensagem = match ($formaPagamento) {
            'cartaoCredito' => "Obrigado, $nome! O valor final da sua compra é R\$ $valorFinal.",
            'boleto' => "Obrigado, $nome! O valor final da sua compra com desconto de 8% é R\$ $valorFinal.",
            'deposito' => "Obrigado, $nome! O valor final da sua compra com desconto de 10% é R\$ $valorFinal.",
            default => "Forma de pagamento inválida.",
        };

        echo "<h3><p><div class='w3-container'>$mensagem</div></p></h3>";

    } else {
        // Se o formulário não foi enviado, exibe uma mensagem de erro
        echo "<h1><p class='w3-text-red'>Erro: o formulário não foi enviado.</p></h1>";
    }

    ?>


</body>

</html>