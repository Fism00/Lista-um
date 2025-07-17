<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa temperatura</title>
</head>
<body>

   <form method="POST" action="">
        <label for="temperatura">converte a temperatura de graus em fahrenheit:</label>
        <input type="number" id="temperatura" name="temperatura" required>
        <button type="submit" name="convertertemperatura">converter</button>
   </form>

   <?php

   $temperatura = 0;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['convertertemperatura'])){
        $temperatura = $_POST['temperatura'];
        $fahrenheit = (($temperatura * 9/5) + 32);

        echo("A temperatura de $temperatura em fahrenheit é $fahrenheit");
    }

   }

   ?>
 
</body>
</html>