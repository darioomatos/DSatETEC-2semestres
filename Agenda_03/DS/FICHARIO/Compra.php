<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Madeira e Cia Ltda - Forma de Pagamento</title>

</head>

<body>

    <div class="w3-container w3-teal">
        <h2>Forma de pagamento</h2>
    </div>

    <form class="w3-container" method="post" action="processa_pagamento.php" onsubmit="return checkFileExistence()">
        <label class="w3-text-teal"><b>Nome do Cliente</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">
        <label class="w3-text-teal"><b>Valor da Compra</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number">
        <label class="w3-text-teal"><b>Escolha a forma de Pagamento:</b></label>

        <select class="w3-input w3-border w3-light-grey" name="cmbPag">

            <option value="cartaoCredito">Cartão de Crédito</option>
            <option value="boleto">Boleto</option>
            <option value="deposito" selected>Depósito</option>

        </select>
        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>

    <!-- Script que verifica se processa_pagamento.php existe, antes de enviar os dados via formulario. -->
    <script>
        function checkFileExistence() {
            var xhr = new XMLHttpRequest();
            xhr.open('HEAD', 'processa_pagamento.php', false);
            xhr.send();
            if (xhr.status == "404") {
                alert("Arquivo de destino não encontrado!");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>