<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa tabela</title>
</head>
<body>

   <form method="POST" action="">
        <label for="tabela">mostra a tabela do numero informado:</label>
        <input type="number" id="tabela" name="tabela" required>
        <button type="submit" name="informatabela">informar</button>
   </form>

   <?php

   $numero = 0;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['tabela'])){
        $numero = $_POST['tabela'];

        for($i = 1; $i <= 10; $i++ ){
            echo "| $numero x $i = ". $numero*$i . "|";
            echo "<br>";
        }
    }

   }

   ?>
 
</body>
</html>