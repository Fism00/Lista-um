<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa palindromo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="palindromo">informe uma palavra:</label>
        <input type="text" id="palindromo" name="palindromo" required>
        <button type="submit" name="informapalindromo">informar</button>
   </form>

   <?php

   $palavra;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['palindromo'])){
        $palavra = $_POST['palindromo'];

        
    }

   }

   ?>
 
</body>
</html>