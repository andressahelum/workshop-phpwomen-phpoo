

<?php

//Classe sempre vai ter a primeira letra maiúscula
// Extends significa que ele herda da pessoa os métodos e atributos
class Estudante extends Pessoa
{
    public $matricula;
    public $ira; //indice de rendimento academico

    public function disciplinasMatriculadas()
    {
        return 'PHP Orientado a Objetos';
    }
    public function atualizaIRA($nota)
    {
        $this->ira += $nota; // O this é usado quando usa um atributo de dentro da propria classe. O this ele já faz o papel do cifrão
        return $this->ira;
    }
    public function verEstudante():array
    {
        $dados['Nome'] = $this->nome;
        $dados['Matricula'] = $this->matricula;
        $dados['IRA'] = $this->ira;

        return $dados;
    }
}

