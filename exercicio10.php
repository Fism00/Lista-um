<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa a sequencia Fibonacci entre numeros</title>
</head>

<body>

    <form method="POST" action="">
        <label for="fibonacci">mostra a sequencia Fibonacci entre 1 e o numero informado:</label>
        <input type="number" id="fibonacci" name="fibonacci" required>
        <button type="submit" name="informafibonacci">informar</button>
    </form>

    <?php

    $numero = 0;
    $b = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['informafibonacci'])) {
            $numero = (int)$_POST['fibonacci'];
            if ($numero <= 0) {
                echo ("bote um numero inteiro e diferente de zero");
            } else {
                
                echo ("a sequencia Fibonacci entre 1 a $numero são:");
                
                for ($i = 1; $i  <=  ($numero - 1); $i++)
                    if ($i % 2 == 0) {
                        $b++;
                    }

                echo ($b);
            }
        }
    }



    ?>

</body>

</html>