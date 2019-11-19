<?php
    $filename = 'ponto.txt';
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
  $name = $_POST['name'];

  echo "ola " . "$name " ;
  $hora = date('H');

  //bom dia->6 as 11
  //boa tarde->12 as 19
  //boa noite ->20 as 5
  if ($hora > 5 and $hora <11) {
    echo "bom dia";
      echo date('Y-m-d H:i:s');
  }if ($hora>12 and $hora <19) {
    echo "boa tarde";
    echo date('Y-m-d H:i:s');
  }
  else{
    echo "boa noite";
    echo date('Y-m-d H:i:s');
  }



?>
