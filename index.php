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
        require './Estudante.php';
        $estudante = new Estudante(); // Instanciando a variável estudante, criando um objeto
        echo $estudante->disciplinasMatriculadas(); // Chamando meu método  
    ?>
    <br><hr>
    <?php
        $ira = $estudante->atualizaIRA(9);
        echo "Novo IRA {$ira} <br>";

        $ira2 = $estudante->atualizaIRA(5);
        echo "Novo IRA {$ira2} <br>";
    ?>
</body>
</html>