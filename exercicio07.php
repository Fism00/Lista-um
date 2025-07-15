<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa perfeição</title>
</head>

<body>

    <form method="POST" action="">
        <label for="perfeicao">mostra a perfeição do numero informado:</label>
        <input type="number" id="perfeicao" name="perfeicao" required>
        <button type="submit" name="informarperfeicao">informar</button>
    </form>

    <?php

    $numero = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['informarperfeicao'])) {
            $numero = (int)$_POST['perfeicao'];

            function quantidadedivi($n)
            {
                $b = 0;

                for ($i = 1; $i  <=  ($n - 1); $i++)

                    if ($n % $i == 0) {
                        $b += $i;
                    }

                return $b;
            }

            $divisaosoma = quantidadedivi($numero);

            if ($divisaosoma == $numero) {
                echo ("o numero $numero é perfeito :D");
            } else {
                echo ("o numero $numero não é perfeito :C");
            }
        }
    }




    ?>

</body>

</html>