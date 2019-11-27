<?php

// Declaração de variáveis
$filename = '../bd/trabalhadores.txt';
$file = fopen($filename,'r');
$utilizadores=array();
$i=1;

// Abre o ficheiro, guarda o conteudo na variável line e consequentemente no array utilizadores
while (($line =fgets($file,4096)) !== false ){
      $utilizadores[] = $line ;

}
fclose($file);

foreach ($utilizadores as $utilizador) {
      $i++;
}
 // Abre o ficheiro e escreve no mesmo o nome, o nick e a password do utilizador
//$file = fopen($filename, 'a');
//fwrite($file,$i .",". $_POST['name'] .",". $_POST['nick'] .",". $_POST['passwd'] . "," . "\n");
//fclose($file);
 // Red
if (!empty($_POST['name']) && !empty($_POST['nick']) && !empty($_POST['name'])) {
  $file = fopen($filename, 'a');
  fwrite($file,$i .",". $_POST['name'] .",". $_POST['nick'] .",". $_POST['passwd'] . "," . "\n");
  fclose($file);
  header('Location: ../login/login.html');
}
else {
  echo "O utilizador tem de preencher todos os campos";
}
