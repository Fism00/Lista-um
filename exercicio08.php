<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa pares entre dois numeros</title>
</head>

<body>

    <form method="POST" action="">
        <label for="pares">mostra a pares do numero informado:</label>
        <input type="number" id="pares" name="pares" required>
        <button type="submit" name="informapares">informar</button>
    </form>

    <?php

    $numero = 0;
    $b = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['informapares'])) {
            $numero = (int)$_POST['pares'];
            if ($numero <= 0) {
                echo ("bote um numero inteiro e diferente de zero");
            } else {
                
                echo ("os pares entres 1 e o $numero são:");
                
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