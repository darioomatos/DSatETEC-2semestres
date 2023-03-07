<?php

// verifica o medoto de envio.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Inicio - Carrega todo conteudo enviado pelo form.
    ob_start();

    $nome = $_POST['txtNome'];
    $valor_compra = $_POST['txtValorCompra'];
    $forma_pagamento = $_POST['cmbPag'];
    $valor_desconto = (float) 0;

    if ($forma_pagamento == 'deposito') {
        $valor_desconto = floatval($valor_compra * 0.1);
        $forma_pagamento = 'Depósito';
    } elseif ($forma_pagamento == 'boleto') {
        $valor_desconto = floatval($valor_compra * 0.08);
        $forma_pagamento = 'Boleto';
    } elseif ($forma_pagamento == 'cartaoCredito') {
        $forma_pagamento = 'Cartão de Crédito';
    }

    $valor_total = floatval($valor_compra - $valor_desconto);

    // exibe o conteúdo dentro da div com id "conteudo_pagamento"
    echo "<div class='w3-panel w3-border w3-green w3-round-large'>";
    echo "<p class='w3-hoover-text-blue'>Promoção do mês de aniversário, $nome!</p>";
    echo "<p class='w3-hoover-text-blue'>Valor da compra sem o desconto: R$ " . number_format($valor_compra, 2, ',', '.') . ";</p>";
    echo "<p class='w3-hoover-text-blue'>Forma de pagamento escolhida: $forma_pagamento;</p>";
    echo "<p class='w3-hoover-text-blue'>Desconto de: " . number_format($valor_desconto, 2, ',', '.') . " " . round(floatval($valor_desconto / $valor_compra * 100), 2) . "%;</p>";
    echo "<p class='w3-hoover-text-blue'>Você economizou: R$ " . number_format($valor_desconto, 2, ',', '.') . ";</p>";
    echo "<p class='w3-hoover-text-blue'>Valor a pagar: R$ " . number_format($valor_total, 2, ',', '.') . ".</p>";
    echo "</div>";

    // Fim - conteúdo enviado pelo form
    $pagto_content = ob_get_clean();

    // exibe o conteúdo dentro do elemento HTML com id "conteudo_pagamento"
    echo "<script>document.getElementById('conteudo_pagamento').innerHTML = '" . addslashes($pagto_content) . "';</script>";

} else {
    // Se o formulário não foi enviado, exibe uma mensagem de erro
    echo "<div class='w3-panel w3-red'><h3>Erro:</h3><p>O formulário não foi enviado.</p></div>";
}

/*echo "<script>";
echo "document.getElementById('conteudo_pagamento').style.visibility = 'visible';</script>";
echo "</script>";
*/
// Fim - conteudo enviado pelo form.
//$pagto_content = ob_get_clean();
?>