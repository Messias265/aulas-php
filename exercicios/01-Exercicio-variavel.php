<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de dados do aluno</title>
</head>
    <style>
        body {
              font-family: sans-serif;
            background-color: bisque;
            padding-block: 40px;
            padding-inline: 20px;
            margin: 0;
        }
    </style>
<body>
    <h1>Exercicio 01</h1>
    <hr>
    <?php
    // Variáveis
    $curso = "Web Designer";
    $data = "28/08/2025";
    $hora = 200 ;
    $falta = $hora /4;
    $nome = "james";

    
    // Constantes
  

    ?>
    <h2>Dados do Aluno</h2>

    <h3> Data de hoje <?= $data ?></h3>
    
    <!-- Saída -->
     <p>Nome do alouno: <?php echo $nome ?> </p>
     <p>Curso: <?= $curso ?> </p>
     <p>Carga horária: das 8 até 12:00 com <?php echo $hora ?> dias</p>
     <p>limite de faltas: 25% de 200 dias seria <?php echo $falta ?> dias</p>

   
    

</body>
</html>