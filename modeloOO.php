<?php

class Pessoa # classe
{
    public $nome; # atributos da class
    public $idade;

    public function __construct($nome, $idade) # metodo contrutor
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function correr($km) # metodo da classe (parametros)
    {
        echo $this->nome . " esta correndo";
        for ($i=0, $i<$km, $i++){
            echo ".";
        }
        echo $this->nome . " terminou de correr";
    }
}

fulano = new Pessoa();     # objeto criado a partir da classe
fulano->nome = "Pindauva"; # setando valores dos atributos
fulano->idade = "13";

rogerio = new Pessoa("roger","65");  # objeto com o construtor

echo fulano->nome; # output de atributo
echo fulano->correr(50);
