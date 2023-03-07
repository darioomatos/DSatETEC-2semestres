<form class="w3-container" method="post" action="#"
    onsubmit="return checkFileExistence('includes/pagamento.php'); return showIdForm('conteudo_pagamento');">

    <label class="w3-text-teal"><b>Nome do Cliente</b></label>
    <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text" required>
    <label class="w3-text-teal"><b>Valor da Compra</b></label>
    <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number" inputmode="numeric" required>
    <label class="w3-text-teal"><b>Escolha a forma de Pagamento:</b></label>

    <select class="w3-input w3-border w3-light-grey" name="cmbPag">

        <option value="cartaoCredito">Cartão de Crédito</option>
        <option value="boleto">Boleto</option>
        <option value="deposito" selected>Depósito</option>

    </select>
    <br>
    <button class="w3-btn w3-blue-grey">Enviar</button>
    <br>
</form>