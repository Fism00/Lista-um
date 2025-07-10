<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica positivo, negativo e zero</title>
</head>
<body>

   <form method="POST" action="">
        <label for="sinal">verificador de sinal:</label>
        <input type="number" id="sinal" name="sinal" required>
        <button type="submit" name="informasinal">informar</button>
   </form>

   <?php

   $numero = 0;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['sinal'])){
        $numero = $_POST['sinal'];

        if($numero > 0){
            echo "o numero $numero é positivo!";
        }elseif($numero < 0){
            echo "o numero $numero é negativo!";
        }else{
            echo "o numero $numero é zero né seu safado";
        }
    }

   }

   ?>
 
</body>
</html>