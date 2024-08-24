<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Inclui o autoload do Composer para carregar as dependências
        require './vendor/autoload.php';

        // Cria uma nova instância do controlador de configuração
        $url = new Core\ConfigController;
    ?>
</body>
</html>
