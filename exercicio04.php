<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        tr:nth-child(3) td {background-color: pink;}
    </style>
</head>

<body>

    <h2>Demonstração de dados</h2>


    <?php
    $linguagens = [

        [
            "id" => "1",
            "nome" => "HTML:",
            "descrição" => "Estruturação"
        ],
        [
            "id" => "2",
            "nome" => "CSS:",
            "descrição" => "Estilos"
        ],

        [
            "id" => "3",
            "nome" => "JS:",
            "descrição" => "Comportamentos"

        ],

        [
            "id" => "4",
            "nome" => "PHP:",
            "descrição" => "Back-End"

        ],

        [
            "id" => "5",
            "nome" => "SQL:",
            "descrição" => "Manipulação de dados"

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
        foreach ($linguagens as $linguagem): ?>

            <li> <span> <?= $linguagem["nome"] ?> <span> <?= $linguagem["descrição"] ?></li>

        <?php endforeach; ?>
    </ol>

    <hr>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($linguagens as $linguagem): ?>
                <tr>
                    <td><?= $linguagem["id"] ?></td>
                    <td><?= $linguagem["nome"] ?></td>
                    <td><?= $linguagem["descrição"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>