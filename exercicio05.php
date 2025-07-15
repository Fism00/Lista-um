<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa amizade</title>
</head>
<body>

   <form method="POST" action="">
        <label for="amizade">mostra se há amizade dos numeros informados:</label>
        <input type="number" id="amizade1" name="amizade1" required>
        <input type="number" id="amizade2" name="amizade2" required>
        <button type="submit" name="informa">informar numeros</button>
   </form>

   <?php

   function somaDivisores($n) {
    $soma = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
    }

   if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['informa'])){
        $num1 = (int)$_POST['amizade1'];
        $num2 = (int)$_POST['amizade2'];

        if($num1 <= 0 || $num2 <= 0){
            echo "Porfavor ensira os dois numeros sendo positivos e inteiros";
        } else {
            $diva = somaDivisores($num1);
            $divb = somaDivisores($num2);

            if ($diva === $num2 && $divb === $num1){
                echo "$num1 e $num2 são amigos :D";
            }else{
                echo "$num1 e $num2 não são amigos :C";
            }
        }   
    }

   }

   ?>
 
</body>
</html>