<?php

// Declaração de variáveis
$filename = '../bd/trabalhadores.txt';
$file = fopen($filename,'r');
$utilizadores=array();
$i=1;



foreach ($utilizadores as $utilizador) {
      $i++;
}
$file = fopen($filename, 'a');
fwrite($file,$i .",". $_POST['name'].",".$_POST['nick'] .",". $_POST['passwd'] . "," . "\n");
fclose($file);

header('Location: ../login/login.html');
?>
