<?php

require __DIR__ . '\..\vendor\autoload.php';

use HelloPhp\Jogador;
use HelloPhp\Personagem;

$pc = new Jogador(100, "Jogador",10,"manganez");
$npc = new Personagem(50, "Inimigo",5);





$npc->bater($pc);
$pc->baterForte($npc);
$pc->baterForte($pc);
$pc->bater($npc);
$npc->bater($pc);
$pc->bater($npc);


echo $pc . PHP_EOL;
echo $npc;