<?php
    $filename = 'trabalhadores.txt';
    $file = fopen($filename,'r');
    $utilizadores=array();
    $nick = $_POST['nick'] ;
    $password = $_POST['passwd'] ;
    $verdade = FALSE ;
    $hora = date('H');
    $radio = $_POST['checked'] ;

    echo $radio ;
    // echo $password ;

while (($line = fgets($file,4096)) !== false ){
    //  echo $line ;
      $utilizadores[] = $line ;
      $utilizador = explode(',' , $line) ;
      $utilizadores[$utilizador[0]] = $utilizador[1];
  //    var_dump(  $utilizador[3])  . "\n";
    //  echo $utilizador[2] ;
      if($utilizador[2] == $nick && $utilizador[3] == $password) {
        $verdade = true ;
    //    if ($radio = 1) {

    //    }
      //  fwrite($file, $i . "," . $_POST['name'] . "," . $_POST['nick'] . "," . $_POST['passwd'] . "\n");
//  }
      //  echo $nick ;
        break ;
   //echo $utilizadores[1] ;
 } }


 if ($verdade = true) {
   //consegue dar login
   if ($hora>5 && $hora<11) {
     if($radio == "in") {
       echo "<br><br> Bom Dia $nick " . date('H:i') ."<br> Bom Trabalho"   ;}
     else {
     echo /*"Não pode sair a esta hora" */ "<br><br> Bom Dia $nick " . date('H:i') . "<br> Bom Descanso"; }
   }
   if ($hora>12 && $hora<19) {
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
    echo "<br><br> Boa Noite $nick " . date('H:i') . "<br> Bom Descanso "  ;
  }
}
}
?> <br>
<?php


    fclose($file);


  //  var_dump($user)  ;
    //  if ($nick) {
        // code...
    //  }


  //  fwrite($file,$i .",". $_POST['name'].",".$_POST['nick'] .",". $_POST['passwd'] ."\n");
