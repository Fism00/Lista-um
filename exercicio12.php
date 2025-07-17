<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa vogais</title>
</head>
<body>

   <form method="POST" action="">
        <label for="vogais">mostra 
            a vogais da palavra informada:</label>
        <input type="text" id="vogais" name="vogais" required>
        <button type="submit" name="informavogais">informar</button>
   </form>

   <?php

   $palavra;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['informavogais'])){
        $palavra = $_POST['vogais'];
        $letras = str_split($palavra);

        $b = 0;

        for($i = 0 ; $i  <= (strlen($palavra)-1); $i++ ){
            if($letras[$i] == "a" || $letras[$i] == "e" || $letras[$i] == "i" || $letras[$i] == "o" ||  $letras[$i] == "u" || $letras[$i] == "A" || $letras[$i] == "E" || $letras[$i] == "I" || $letras[$i] == "O" ||  $letras[$i] == "U" ){
                $b++;
            }
        }
        echo "essa palavra tem $b vogais!";
    }


   }

   ?>
 
</body>
</html>