<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa soma pares entre dois numeros</title>
</head>

<body>

    <form method="POST" action="">
        <label for="somapares">mostra a soma dos pares do numero informado:</label>
        <input type="number" id="somapares1" name="somapares1" required>
        <input type="number" id="somapares2" name="somapares2" required>
        <button type="submit" name="informapares">informar</button>
    </form>

    <?php

    $numero1 = 0;
    $numero2 = 0;

    $b = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['informapares'])) {
            $numero1 = (int)$_POST['somapares1'];
            $numero2 = (int)$_POST['somapares2'];

            if ($numero1 <= 0 || $numero2 <= 0) {
                echo ("bote numeros inteiros e diferentes de zero");
            } else {

                if ($numero1 < $numero2) {
                    echo ("a soma dos pares entres $numero1 e o $numero2 são: ");
                    for ($i = $numero1 + 1; $i  <=  ($numero2 - 1); $i++) {
                        $b += $i;
                    }
                    echo ($b);
                } elseif ($numero1 == $numero2) {
                    echo ('os dois numeros são iguais.');
                } else {
                    echo ("a soma dos pares entres $numero2 e o $numero1 são: ");
                    for ($i = $numero2 + 1; $i  <=  ($numero1 - 1); $i++) {
                        $b += $i;
                    }

                    echo ($b);
                }
            }
        }
    }



    ?>

</body>

</html>