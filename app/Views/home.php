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
                <div class="row">
                    <div class="col-sm-3">
                        <p><?php echo anchor('pagamento', 'Consultar pagamentos', ['class' => 'btn btn-info ']) ?></p>
                        <?php echo form_open('pagamento/do') ?>
                        <div class="form-group">
                            <label for="produto">Produto</label>
                            <input type="text" class="form-control" name="produto" id="produto" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="number" class="form-control" name="valor" id="valor" required min='0'>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Pagar">
                        <?php echo form_close(); ?>
                    </div>
                    <div class="col-sm-9">
                        <div class="d-flex justify-content-around">
                            <?php echo img('assets/img/pix-bc-logo.png', false, ['style' => 'max-width: 300px; height: 106px']) ?>
                            <?php echo img('assets/img/logo-mp.jpg', false, ['style' => 'max-width: 200px']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>