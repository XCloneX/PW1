<?php
    $filename = 'trabalhadores.txt';
    $file = fopen($filename,'r');
    $utilizadores=array();
    $nick = $_POST['nick'] ;
    $password = $_POST['passwd'] ;
    $verdade = FALSE ;
    $hora = date('H');
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
        fwrite($file, $i . "," . $_POST['name'] . "," . $_POST['nick'] . "," . $_POST['passwd'] . "\n");

      //  echo $nick ;
        break ;
   //echo $utilizadores[1] ;
 } }


 if ($verdade = true) {
   //consegue dar login
   if ($hora>7 && $hora<15) {
     echo "<br><br> Boas $nick " . date('H:i:s') . " Primeiro turno";
   }
   else
   echo "<br><br> Boas $nick " . date('H:i:s') . " Segundo turno" ;
 }




?> <br>
<?php


    fclose($file);


  //  var_dump($user)  ;
    //  if ($nick) {
        // code...
    //  }


  //  fwrite($file,$i .",". $_POST['name'].",".$_POST['nick'] .",". $_POST['passwd'] ."\n");
