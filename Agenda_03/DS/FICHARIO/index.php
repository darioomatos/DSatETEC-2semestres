<!DOCTYPE html>

<head lang="pt-BR">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="/assets/style.css">

    <title>Madeira e Cia Ltda - Pagina inicial</title>

    <!-- script que faz algumas verificacoes. -->
    <script src="/assets/checkVerify.js"></script>
    <script src="/assets/idForm.js"></script>

</head>

<body>

    <?php include('includes/header.php'); ?>

    <main>

        <?php include('includes/compra.php'); ?>

        <hr>

        <div id="conteudo_pagamento">
            <div class="w3-container w3-border">
                <?php include('includes/pagamento.php'); ?>
            </div>
        </div>

        <hr>

    </main>


    <?php include('includes/footer.php'); ?>

</body>

</html>