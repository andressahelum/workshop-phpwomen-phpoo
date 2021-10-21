

<?php

//Classe sempre vai ter a primeira letra maiúscula
class Estudante
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
}

