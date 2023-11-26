<?php
echo 'Hello World!'."<br/>"; // entre aspas simples 'valor literal' ou seja uma string.

$nome = 'Sergio';
$sobrenome = 'Felipe';

$nomeCompleto = "$nome $sobrenome"; // entre aspas duplas, verifica se tem alguma variavel a ser executada.

$listaDePresentes = ['Smartphone', 'Tablet', 'Laptop', 'Drone', 'Smartwatch']; // Array

$itemDaListaDePresentes = [...$listaDePresentes, 'Xiaomi']; // Operador Array Spread Obs: PHP 7.4 "um atalho para COPIAR um Array e coloca-lo dentro de outro...

$pessoaPresenteada = "$nomeCompleto ganho um $listaDePresentes[0] de presente, da marca $itemDaListaDePresentes[5].";
echo $pessoaPresenteada."<br/>";