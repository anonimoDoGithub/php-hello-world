<?php
echo 'Hello World!'."<br/>"; // entre aspas simples 'valor literal' ou seja uma string.

$nome = 'Sergio';
$sobrenome = 'Felipe';

$nomeCompleto = "$nome $sobrenome"; // entre aspas duplas, verifica se tem alguma variavel a ser executada.

$listaDePresentes = ['Smartphone', 'Tablet', 'Laptop', 'Drone', 'Smartwatch']; // Array

$pessoaPresenteada = "$nomeCompleto ganho um $listaDePresentes[0] de presente.";
echo $pessoaPresenteada;