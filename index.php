<?php 

require "./classes/Pessoa.php";
require "./classes/AtividadesPessoa.php";
require "./classes/UploadFotos.php";

$upload = new UploadFotos(); // Objecto
$upload->file('foto.png'); // metodo
$upload->extension(); // metodo
$upload->rename(); // metodo
echo $upload->upload(); // metodo

/* $atividadePessoa = new AtividadesPessoa;
echo $atividadePessoa->pular(); */

/* $pessoa = new Pessoa;
$pessoa->idade = 35;
$pessoa->nome = "Thiago";
$pessoa->email = "contato@gmail.com";

echo $pessoa->dados() . PHP_EOL;

$pessoa->idade = 30;
$pessoa->nome = "João";
$pessoa->email = "joao@gmail.com.br";

echo $pessoa->dados(); */