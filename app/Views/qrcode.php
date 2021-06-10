<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Pagamento com PIX</title>
</head>

<body>
    <div class="container pt-3">
        <div class="card mb-3">
            <div class="card-header">
                Pagamentos com PIX
            </div>
            <div class="card-body">
                <p>Escaneie o código abaixo para efetuar o pagamento:</p>
                <p><strong>Produto:</strong> <?php echo $produto; ?></p>
                <p><strong>Valor:</strong> R$ <?php echo $valor; ?></p>
                <div class="row d-flex justify-content-center">
                    <img src="data:image/jpeg;base64,<?php echo $qr_code_base64 ?>" alt="QRCode" style="width: 300px;">
                </div>
            </div>
        </div>
        <p><?php echo anchor('pagamento', 'Tela de Pagamentos', ['class' => 'btn btn-primary']) ?></p>
        <p><?php echo anchor(base_url(), 'Página Inicial', ['class' => 'btn btn-secondary']) ?></p>
    </div>
</body>

</html>