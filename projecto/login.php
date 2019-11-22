<?php
    $filename = 'trabalhadores.txt';
    $filename2 = 'assiduidade.txt';
    $file = fopen($filename,'r');
    $file2 = fopen($filename2,'a');
    $utilizadores=array();
    $nick = $_POST['nick'] ;
    $password = $_POST['passwd'] ;
    $verdade = false ;
    $hora = date('H');
    $radio = $_POST['checked'] ;
    $horadeponto = date('d-m H:i');
    $assiduidades = array();

  //  echo $radio ;
    // echo $password ;

while (($line = fgets($file,4096)) !== false ){
    //  echo $line ;
      $utilizadores[] = $line ;
      $utilizador = explode(',' , $line) ;
      $utilizadores[$utilizador[0]] = $utilizador[1];

  //    var_dump(  $utilizador[3])  . "\n";
    //  echo $utilizador[2] ;
      if($utilizador[2] == $nick and $utilizador[3] == $password) {
        $verdade = true ;

      //  $line[]
    //    if ($radio = 1) {

    //    }
      //  fwrite($file, $i . "," . $_POST['name'] . "," . $_POST['nick'] . "," . $_POST['passwd'] . "\n");
//  }
      //  echo $nick ;
        break;
   //echo $utilizadores[1] ;
 }
}
 if($verdade == false) {
   echo "BIG MISTAKE BUDDY"   ;
 }



else {

  $f = fopen($filename2,'r');
  while (($line = fgets($f,4096)) !== false ){
      //  echo $line ;
        $operacao = '';
        $tok = explode(',' , $line) ;
        //echo "<pre>".print_r($tok,true) . "</pre>";

        if($tok[0] == $nick) {
         $operacao = $tok[2] ;
     }
  }

    if($operacao == $radio){
      echo "erro";
      exit;
  }
  
   if ($hora>5 && $hora<11) {
     if($radio == "in") {
       echo "<br><br> Bom Dia $nick " . date('H:i') ."<br> Bom Trabalho"   ;}
     else {
     echo /*"Não pode sair a esta hora" */ "<br><br> Bom Dia $nick " . date('H:i') . "<br> Bom Descanso"; }
   }
   if ($hora>11 && $hora<19) {
     if($radio == "in") {
       echo "<br><br> Boa Tarde $nick " . date('H:i') . "<br> Bom Trabalho "  ;  }

    if ($radio == "out"){
      echo "<br><br> Boa Tarde $nick " . date('H:i') . "<br> Bom Descanso " ; }
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



  fwrite($file2, $_POST['nick'] .",". $horadeponto . "," . $radio . "," . "\n");
  fclose($file2);


  fclose($file);





  //  var_dump($user)  ;
    //  if ($nick) {
        // code...
    //  }


  //  fwrite($file,$i .",". $_POST['name'].",".$_POST['nick'] .",". $_POST['passwd'] ."\n");
