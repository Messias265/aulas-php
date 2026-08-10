<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
    <style>

    </style>
<body>
    <h1>Exercicio 01</h1>
    <hr>
    <?php
    // Variáveis
    $curso = "Designe grafico";
    $data = "28/08/2025";
    $hora = 200 ;
    $nome = "Gabriel";

    
    // Constantes
    define("PROPRIETARIO", "Fulano de Tal", );
    const CURSO = "Designe grafico";
    const HORA = 200;
    const FALTA = HORA * 0.25;

    ?>
    <h2>Dados do Aluno</h2>

    <h3> Data de hoje <?= $data ?></h3>
    
    <!-- Saída -->
     <p>Nome do alouno: <?php echo $nome ?> </p>
     <p>Curso: <?= CURSO ?> </p>
     <p>Carga horária: das 8 até 12:00 com <?php echo $hora ?> dias</p>
     <p>limite de faltas: 25% de 200 dias seria <?php echo FALTA ?> dias</p>
</body>
</html>