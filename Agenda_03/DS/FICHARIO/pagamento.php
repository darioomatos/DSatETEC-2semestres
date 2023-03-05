<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>adeira e Cia Ltda - Confirmação de Pagamento</title>

</head>

<body>

    <div class="w3-container w3-teal">
        <h2>Madeira e Cia Ltda - Confirmação de Pagamento</h2>
    </div>

    <?php

    // verifica o medoto de envio.
    if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {

        $nome = $_POST['txtNome'];
        $valor_compra = $_POST['txtValorCompra'];
        $forma_pagamento = $_POST['cmbPag'];
        $valor_desconto = 0;

        if ($forma_pagamento == 'deposito') {
            $valor_desconto = ($valor_compra * 0.1);
        } elseif ($forma_pagamento == 'boleto') {
            $valor_desconto = ($valor_compra * 0.08);
        }

        $valor_total = $valor_compra - $valor_desconto;
    } else {
        // Se o formulário não foi enviado, exibe uma mensagem de erro
        echo "<div class='w3-panel w3-red'><h3>Erro:</h3><p>O formulário não foi enviado.</p></div>";
    }
    ?>

    <div class="w3-panel w3-border w3-green w3-round-xxlarge">
        <p class="w3-blue">Promoção do mês de aniversário,
            <?php echo $nome; ?>!
        </p>
        <p class="w3-blue">Valor da compra sem o desconto: R$
            <?php echo number_format($valor_compra, 2, ',', '.'); ?>;
        </p>
        <p class="w3-blue">Forma de pagamento escolhida:
            <?php echo $forma_pagamento; ?>;
        </p>
        <p class="w3-blue">Desconto de:
            <?php echo number_format($valor_desconto, 2, ',', '.'); ?> (
            <?php echo round(($valor_desconto / (float) $valor_compra) * 100, 2); ?>%);
        </p>
        <p class="w3-blue">Você economizou: R$
            <?php echo number_format($valor_desconto, 2, ',', '.'); ?>;
        </p>
        <p class="w3-blue">Valor a pagar: R$
            <?php echo number_format($valor_total, 2, ',', '.'); ?>.
        </p>
    </div>

</body>

</html>