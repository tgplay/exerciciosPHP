<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Getters, Setter e Construct PooPHP</title>
    </head>
    <body>
        <pre>
            <?php 
                require_once 'Caneta.php';

                $c1 = new Caneta();
                $c1->setModelo("BIC");
                // $c1->modelo = 'Bic'; , dessa forma consigo setar diretamente um atributo da classe, desde que ele seja público.
                
                $c1->setPonta(0.5);
                // $c1->ponta = 0.5; , dessa forma consigo setar diretamente um atributo da classe, desde que ele seja público. Se não for público, não será possível. Dará erro.


                print_r($c1);
                
            ?>
        </pre>
    </body>
</html>