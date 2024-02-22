<?php 

function FirstFactorial($num) {

  // code goes here
  $factorila=1;
for($i=1;$i<=$num;$i++){
$factorila=$factorila*$i;

}

  //return $num;
  return $factorila;
echo $factorila.PHPEOL;

}
   
// keep this function call here  
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));  

?>