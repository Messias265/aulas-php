<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>  

    <h2>Demonstração de dados</h2>
 
      <ol>
<?php
    $identificador = [

    [
        "id" => "1",
        "nome" => "HTML",
        "descrição" => "Estruturação"
    ],
    [
        "id" => "2",
        "nome" => "CSS",
        "descrição" => "Estilos"
    ],

    [
        "id" => "3",
        "nome" => "JS",
        "descrição" => "Comportamentos"
        
    ],


    
       /*  [
        "HTML" => "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL:" => "Manipulação de dados",
        ],*/
    ];
   

      ?>
        <ol>
            <?php  
             foreach($identificador as $idenficadores): ?>
             <li> <span> <?= $idenficadores ["nome"] ?> <span> <?= $idenficadores ["descrição"] ?></span></span></li>
        <?php endforeach; ?>
      </ol>
    
</body>
</html>