<?php
date_default_timezone_set('Europe/Lisbon');

echo 'Olá!!';
echo '<br/><br/>';
$data = new DateTime();
$nome = 'Pedro';

var_dump($data);
echo '<br/><br/>';
/////////////////////////////////////////////////////

$arquivo = fopen("index.php", "r");

var_dump($arquivo);
echo '<br/><br/>';
/////////////////////////////////////////////////////

function teste() {

	echo 'Olá Boi!';
}

teste();
echo '<br/><br/>';
/////////////////////////////////////////////////////

function teste2($nome) {

	echo $nome;
}

teste2($nome);

?>
