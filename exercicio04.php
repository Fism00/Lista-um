<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa fatorial</title>
</head>
<body>

   <form method="POST" action="">
        <label for="fatorial">mostra a fatorial do numero informado:</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="informa">informar</button>
   </form>

   <?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['fatorial'])){
        $numero = $_POST['fatorial'];
        $total = 1;

        for($i = $numero; $i >=1; $i--){
            $total *= $i;
        }
        echo "O total do fatorial ficou $total";
    }

   }

   ?>
 
</body>
</html>