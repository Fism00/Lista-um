<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa divisores</title>
</head>
<body>

   <form method="POST" action="">
        <label for="divisores">mostra a divisores do numero informado:</label>
        <input type="number" id="divisores" name="divisores" required>
        <button type="submit" name="informadivisores">informar</button>
   </form>

   <?php

   $numero = 0;

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['informadivisores'])){
        $numero = (int)$_POST['divisores'];
        echo("os divisores são:");
        for($i = 1; $i  <=  $numero;$i++)
        if($numero % $i == 0){
        echo ('<br>');
        echo ("numero $i");
        }
        }
    }

   

   ?>
 
</body>
</html>