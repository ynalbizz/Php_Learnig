<?php
namespace HelloPhp;

class Jogador extends Personagem{
    public function __construct(
        public int $vida,
        public string $nome,
        public int $dano,
        public string $raca,
        public bool $vivo = true,
    ){}


    public function baterForte (parent $alvo){
        $this->bater($alvo);
        $this->bater($alvo);
    }

    public function __toString()
    {
    return "$this->nome: $this->vida de vida/ /raça: $this->raca";
    }
}