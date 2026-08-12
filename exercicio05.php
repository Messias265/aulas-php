<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>
    
<h1>Situação do aluno</h1>

<?php 
function exibirMensagem ($mensagem, $pessoa = "visitante")
{
    return "Resultado $mensagem $pessoa";

    
}
?>
<p> <?= exibirMensagem("Do", "Samuel") ?>
</p>
<?php 
  $nota = function (float $nota1, float $nota2, float $nota3):float {
    return $nota1 + $nota2 + $nota3 /3;
  }
?>
<p>Resultado da nota: <?= $Nota(10,5,8) ?></p>



</body>
</html>