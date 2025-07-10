<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa Primo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="imparoupar">Verifica se é um par ou impar:</label>
        <input type="number" id="imparoupar" name="imparoupar" required>
        <button type="submit" name="verificarimparoupar">Verificar</button>
   </form>

   <?php

   $numero = 0;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['imparoupar'])){
        $numero = $_POST['imparoupar'];
        $ehpar = false;
        if($numero % 2 == 0){
            $ehpar = true;
        }
        echo "O número $numero é ". ($ehpar ? 'par':'impar');
    }

   }

   ?>
 
</body>
</html>