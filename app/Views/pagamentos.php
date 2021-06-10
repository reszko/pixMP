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
        <h3>Listagem de Pagamentos</h3>
        <?php foreach ($pagamentos as $pagamento) : ?>
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    <strong><?php echo strtoupper($pagamento->description) ?></strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id:</th>
                            <td><?php echo anchor('pagamento/get/' . $pagamento->id, $pagamento->id, ['title' => 'Clique para maiores informações']) ?></td>
                        </tr>
                        <tr>
                            <th>Valor:</th>
                            <td>R$ <?php echo number_format($pagamento->transaction_amount, 2, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th>Método de Pagamento:</th>
                            <td><?php echo strtoupper($pagamento->payment_method_id) ?></td>
                        </tr>
                        <tr>
                            <th>Data da Compra:</th>
                            <td><?php echo date('d/m/Y H:i:s', strtotime($pagamento->date_created))  ?></td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td><?php echo strtoupper($pagamento->status) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>