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
                // Boa prática: Utilizar os métodos getters e setters ines de acessar diretamente os atributos
                $c1->setModelo("Bic");
                
                // Esse é um exemplo de acessar diretamente o atributo: $c1->modelo = "Nic";

                $c1->setPonta(0.5);
                 
                print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}");
            ?>
        </pre>
    </body>
</html>