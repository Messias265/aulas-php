<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisa de outras funções</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>pesquisando as funções de data e hora</h1>
    <hr>
<?php 
// Mostra número inteiro de segundos, como: 1786970201
date_default_timezone_set("America/Sao_Paulo"); // definir horario de SP 
$time = time();
$hoje = date("d/m/Y H:i:s", time());


?>
    <h1>Time</h1>
    <p>calcula o inicio de 1/01/1970 até a data de hoje em segundos, como: <?= $time ?>

    </p>
    <p>outro teste que mostra dia, mes, ano, hora, minuto e segundo :  <?= $hoje ?>
    </p>

    <hr>

<?php 
date_default_timezone_set("America/Sao_Paulo");
$tempo_agora = getdate();

?>
    <h2>Getdate</h2>
    <p>informa a data, hora, minuto e segundo (momentos atuais) exatamente : <?= $tempo_agora["mday"] ?>/0<?= $tempo_agora["mon"] ?>/<?= $tempo_agora["year"] ?> <?=  $tempo_agora["hours"]  ?>:<?= $tempo_agora["minutes"] ?>:<?= $tempo_agora["seconds"] ?>
    </p>
    
    <hr>
<?php 

date_default_timezone_set('America/Sao_Paulo');

// Cria o timestamp para o dia 25/12/2026 às 20:00:00
$timestamp_natal = mktime(20, 0, 0, 2, 32, 2026);

// Passamos esse timestamp criado para o getdate() organizar as informações
$natal = getdate($timestamp_natal);
?>



 
 <!-- HTML puro exibindo a data montada pelo mktime -->
    <h2>Mktime</h2>

    <p> informações do Dia: 
    <?= $natal['mday'] ?>/<?= $natal['mon'] ?>/<?= $natal['year'] ?> <br> Horário: 
    <?= $natal['hours'] ?>:<?= $natal['minutes'] ?>:<?= $natal['seconds'] ?>
    </p>
   <p> O Mktime calcula a data, mes, ano convertendo que dia seria, se botar 32 dias de fevereiro (que tem 28 dias, fora ano bissexto), se sobrar, ele converte pro próximo mês exemplo março dia 4</p>

    <hr>
<!--
    <h2>Checkdate()</h2>
    <p>

    </p>

    </div> -->
    <?php
// Exemplo 1: Uma data real (Ano bissexto)
$data_valida = checkdate(2, 29, 2024); 

// Exemplo 2: Uma data que não existe
$data_invalida = checkdate(2, 29, 2026); 
?>

<!-- Exibindo os resultados direto no HTML -->
<h3>Checkdata:</h3>

<?php if ($data_valida): ?>
    <p>A primeira data é real e válida!</p>
<?php else: ?>
    <p>A primeira data é falsa!</p>
<?php endif; ?>

<?php if ($data_invalida): ?>
    <p>A segunda data é real e válida!</p>
<?php else: ?>
    <p>A segunda data é falsa! Fevereiro de 2026 só tem 28 dias.</p>
<?php endif; ?>

<p><b> Checkdata</b>: ele valida se oque vc coloca no checkdate corresponde ao calendario ou ano bissexto, no caso fevereiro de 2024 tem ano bissexto, colocando 29/02/2024 (nesse caso vai validar pq é ano bissexto). agora 29/02/2026 (não tem ano bissexto, então é falso) </p>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>