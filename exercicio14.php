<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informa bixestidade</title>
</head>
<body>

   <form method="POST" action="">
        <label for="bixestidade">Verifica se um ano é bixesto:</label>
        <input type="number" id="bixestidade" name="bixestidade" required>
        <button type="submit" name="verificarbixestidade">Verificar</button>
   </form>

   <?php

   $ano = 0;
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificarbixestidade'])){
        $ano = (int)$_POST['bixestidade'];
        $penultimosdigitos = (substr($ano,-1,));
        $ultimosdigitos = (substr($ano,-2,1));


        if($ultimosdigitos == 0 & $penultimosdigitos == 0){
            if($ano % 400 == 0){
                echo "esse ano $ano é bixesto";
            }else{
                echo "esse ano $ano não é bixesto";
            }
        }else{ 
            if($ano % 4 == 0){
                echo "esse ano $ano é bixesto";
            } else {
                echo "esse ano $ano não é bixesto";
            }
        }
    }}

   ?>
 
</body>
</html>