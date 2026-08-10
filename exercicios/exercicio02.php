<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Array 02</title>
    <style>
           *, *::before, *::after {
            box-sizing: border-box;
        } 

        
    </style>
</head>

<body>
    <h1>Exercicio de array e objeto</h1>
    <hr>
    <?php

    //Objeto
    $pessoa = new stdClass;

    $pessoa->nome = "Gabriel";
    $pessoa->email = "Gabrielzin.gameplay@gmail.com";
    $pessoa->senha = "kaioken";
    $pessoa->idade = 20;
    $pessoa->sexo = "microondas";
    $pessoa->cidade = "São Paulo";


    $usuario = [
        "nome" => "perola",
        "email" => "perolinha@gmail.com",
        "senha" => "perola123",
        "idade" => "20",
        "sexo" => "muier",
        "cidade" => "São Paulo",
    ];

    ?>

    <article>
        <ul>
            <li>Nome: <?= $usuario["nome"] ?></li>
            <li>email:
                <a href="mailto: <?= $usuario["email"] ?>"><?= $usuario["email"] ?></a>
            </li>
            <li>Idade= <?= $usuario["idade"] ?></li>
        </ul>
    </article>

    <section>
        <ul>
            <li>Nome: <?= $pessoa->nome ?> </li>
            <li>E-mail:
                <a href="mailto: <?= $pessoa->email ?>">
                    <?= $pessoa->email ?>
                </a>
            </li>
            <li>Idade: <?= $pessoa->idade ?> </li>

        </ul>
    </section>
</body>

</html>