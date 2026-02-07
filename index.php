<?php

const indice = 5;
$alfabeto = "A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
$arrayAlfabeto = explode (",",$alfabeto);

// foreach($arrayAlfabeto as $letras){
//     echo $letras . "<br>";
// }

$palavra = "TENTAADIVINHARAI";
$arrayPalavra = str_split($palavra);

// converter palavra para array .
// foreach($arrayPalavra as $letras){
//     echo $letras . "<br>";
// }
// comparar com o alfabeto e identificar a posição.
for ($i=0;$i < count($arrayPalavra) ; $i++){
    for($j=0; $j < count($arrayAlfabeto); $j++){
        if( $arrayAlfabeto [$j] == $arrayPalavra[$i]){
            $posi = array_search("$arrayPalavra[$i]",$arrayAlfabeto);
            $posicoes [] = $posi +1 ;
        }
    }
}
// adicionar o índice de deslocamento.
//print_r($posicoes);

function calculatePosIndice($posicoes){
    for ($i=0;$i < count ($posicoes);$i++){
        $number = (int)$posicoes[$i] ;
        $number = $number + indice -1;
        $posicoesPosIndice [] = $number ;
    }
    return $posicoesPosIndice;
}

$posicoesPosIndice = calculatePosIndice($posicoes);
//print_r($posicoesPosIndice);

// atribuir nova letra ao primeior índice de um novo array;


//function generateNewWord ($posicoesPosIndiceExample){
  
    $arrayNewPalavra = [];
    foreach ($posicoesPosIndice as $posicaoLetra){
        //for ($i=0;$i < count($arrayAlfabeto);$i++){
            $arrayNewPalavra [] = $arrayAlfabeto[$posicaoLetra];  
        //}
    }
     print_r($arrayNewPalavra);


/// Criar função para trasnformar o Array novamente para String.
/// Refatorar código,
// validar lóigica
// implementar funções 
