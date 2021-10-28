<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão acadêmica</title>
</head>
<body>
    <?php
        require './Pessoa.php';
        require './Estudante.php';
        require './Professor.php';
        $estudante = new Estudante('Maria', '91234-1234', 'maria@gmail.com.br'); // Instanciando a variável estudante, criando um objeto
        echo $estudante->disciplinasMatriculadas(); // Chamando meu método  
    ?>
    <br><hr>
    <?php
        $ira = $estudante->atualizaIRA(9);
        echo "Novo IRA {$ira} <br>";

        $ira2 = $estudante->atualizaIRA(5);
        echo "Novo IRA {$ira2} <br>";
    ?>
    <br><hr>
    <?php
        $estudante->nome = 'Maria';
        $estudante->matricula = '9999999';
        $dadosEstudante = $estudante->verEstudante();
        foreach ($dadosEstudante as $key => $value) {
            // Aspas duplas interpreta o php
            echo "{$key}: {$value} <br>";
        }
        $estudante->inserirDados();
    ?>
    <br><hr>
    <?php
        // Como a classe mãe de professor tem o método construtor e a classe professor herda. Acontece isso.
        $professor = new Professor('João Kleber', '90000-0000', 'joaokleber@gmail.com');
        $professor->criaProfessor('PHP OO', '4.000');
    ?>
</body>
</html>