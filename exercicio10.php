<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa a sequencia de fibonacci entre 1 ao numero informado</title>
</head>

<body>

    <form method="POST" action="">
        <label for="fibonacci">mostra a sequencia de fibonacci entre 1 ao numero informado:</label>
        <input type="number" id="fibonacci" name="fibonacci" required>
        <button type="submit" name="informafibonacci">informar</button>
    </form>

    <?php

    $numero = 0;

    function fibonaccionado($numero)
    {
        if ($numero == 0 || $numero == 1) {
            return $numero;
        } else {
            return (fibonaccionado($numero - 1) + fibonaccionado($numero - 2));
        }
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['informafibonacci'])) {
            $numero = (int)$_POST['fibonacci'];


            echo "o número $numero na sequencia de fibonacci é: " . fibonaccionado($numero);
        }
    }



    ?>

</body>

</html>