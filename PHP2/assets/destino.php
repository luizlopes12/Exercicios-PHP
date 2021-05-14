<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP1</title>
</head>
<body>
    <div class="container">
    <?php

    echo "heroi " . $_POST["select_heroi"] . "<br>Quantidade "
    . $_POST["input_qtd"] . "<br>universo " . $_POST["input_universo"];



    ?>
</div>
</body>
</html>