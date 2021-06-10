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
        <div class="card">
            <div class="card-header bg-primary text-white">
                Pagamentos com PIX
            </div>
            <div class="card-body">
                <p>Status do seu pagamento:</p>
                <p class="text-center"><strong><?php echo strtoupper($status) ?></strong></p>
                <p><?php echo anchor(base_url(), 'Página Inicial') ?></p>
            </div>
        </div>
</body>

</html>