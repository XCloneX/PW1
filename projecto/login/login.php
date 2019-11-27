<?php

    // Declaração de variáveis
    $filename ="../bd/trabalhadores.txt";
    $filename2 = "../bd/assiduidade.csv";
    $file = fopen($filename,"r");
    $file2 = fopen($filename2,"a");
    $utilizadores=array();
    $nick = $_POST['nick'] ;
    $password = $_POST['passwd'] ;
    $verdade = false ;
    $hora = date('H');
    $radio = $_POST['checked'] ;
    $horadeponto = date('d-m H:i');
    $assiduidades = array();


  // Verifica a existencia do utilizador enquanto percorre o ficheiro  e guarda o seu conteudo em um array
while (($line = fgets($file,4096)) !== false ){


      $utilizador = explode(',' , $line) ;
      $utilizadores[$utilizador[0]] = $utilizador[1];

    if($utilizador[2] == $nick and $utilizador[3] == $password) {
        $verdade = true ;

        break;
    }
}
  // Mensagem de erro caso o utilizador não exista ou as credenciais não corespondem
 if($verdade == false) {
   echo "Este utilizador não se encontra registado/As credenciais nao correspondem" ;
}


// Se econtrar o utilizador, abre o ficheiro assiduidade e verifica a sua entrada/saida
else {
    $f = fopen($filename2,'r');
while (($line = fgets($f,4096)) !== false ){
        $operacao = '';
        $tok = explode(',' , $line) ;
// Guarda numa variavel se o utilizador registado entrou ou saiu, consoanate o formulario
  if($tok[0] == $nick) {
         $operacao = $tok[2] ;
  }
}
// impede o utilizador de entrar ou sair duas vezes de seguida
  if($operacao == $radio){
      echo "Erro entrada ou saida repetida";
      exit;
}

// Mostrar no ecrã uma mensagem com o nick do utilizador juntamente com um cumprimento consoante a hora do dia e se está a entrar ou a sair do trabalho
if ($hora>5 && $hora<11) {
   if($radio == "in") {
       echo "<br><br> Bom Dia $nick " . date('H:i') ."<br> Bom Trabalho"   ;}
    else {
     echo /*"Não pode sair a esta hora" */ "<br><br> Bom Dia $nick " . date('H:i') . "<br> Bom Descanso"; }
}
if ($hora>11 && $hora<19) {
     if($radio == "in") {
       echo "<br><br> Boa Tarde $nick " . date('H:i') . "<br> Bom Trabalho "  ;
      }
    if ($radio == "out"){
      echo "<br><br> Boa Tarde $nick " . date('H:i') . "<br> Bom Descanso " ;
    }
}
else {
  if($radio == "in") {
    echo "<br><br> Boa Noite $nick " . date('H:i') . "<br> Bom Trabalho " . $radio  ;
  }
    if ($radio == "out") {
    echo "<br><br> Boa Noite $nick " . date('H:i') . "<br> Bom Descanso "    ;
    }
  }
}


// Escreve no ficheiro da assiduidade o utilizador, a hora de ponto e entrou ou saiu
fwrite($file2, $_POST['nick'] .",". $horadeponto . "," . $radio . "," . "\n");
fclose($file2);
fclose($file);
