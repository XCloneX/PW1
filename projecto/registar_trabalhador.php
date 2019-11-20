<?php
    $filename = 'trabalhadores.txt';
    $file = fopen($filename,'r');
    $utilizadores=array();

while (($line =fgets($file,4096)) !== false ){
      //echo line
      $utilizadores[] = $line ;

}
    fclose($file);
    $i=1;
foreach ($utilizadores as $utilizador) {
      $i++;
      // code...
}
    $file = fopen($filename, 'a');
    fwrite($file,$i .",". $_POST['name'].",".$_POST['nick'] .",". $_POST['passwd'].);
    fclose($file);

    header('Location: login.html');
?>
