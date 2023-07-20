<?php 

# Um caixa eletrônico tem notas no valor de 100, 50, 5 e 2.
# Considerando um saque no valor de 879 retorne a quantidade necessária de cada nota.


# implemente a func saque(int $valor, array $notas)
function caixa($valor, $arr) {
  // $cinco = 5;
  // $dois = 2;
  // $cinquenta =  50;
  // $cem = 100;
  $valorNovo = $valor;
foreach ($arr as $newIndice) {
  
  $inteiro = intdiv( $valorNovo, $newIndice) ;
  echo $inteiro . " notas inteiras de $newIndice, 00<br>";
 $valorNovo = $valorNovo - $inteiro * $newIndice;
 echo "Sobra " . $valorNovo . "<br>";

}


}

caixa(879, [100,50,5,2]);
?>