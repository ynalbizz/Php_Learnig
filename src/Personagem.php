<?php

namespace HelloPhp;

class Personagem
{

  public function __construct(
    public int $vida,
    public string $nome,
    public int $dano,
    public bool $vivo = true,
  ) {
  }

  public function bater(self $alvo)
  {
    if (!$this->vivo) {
      return;
    }
    $alvo->perderVida($this->dano);
  }

  public function perderVida(int $dano)
  {
    if (($this->vida - $dano) <= 0) {
      $this->vida = 0;
      $this->vivo = false;
      return;
    }
    $this->vida -= $dano;
  }

  public function __toString()
  {
    return "$this->nome: $this->vida de vida";
  }
}
