<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ooPHP</title>
    </head>
    <body>
        <?php require_once 'Caneta.php'; 
         
         $c1 = new Caneta; // Um objeto instância da classe Caneta
         $c1->cor = "Azul";
         $c1->ponta = 0.5;
         //  $c1->tampada = false; // false = não está tampada, true = está tampada
         $c1->tampar();
         print_r($c1);
         echo "<br>";

         $c2 = new Caneta; // Outro objeto, instância da classe Caneta
         $c2->cor = "Verde";
         $c2->carga = 50;
         $c2->tampar();
         print_r($c2);



        ?>
        
    </body>
</html>