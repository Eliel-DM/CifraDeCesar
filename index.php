<?php

$indice = 5; // Salvar em um ENV 
$palavraSegredo = "BBB"; // Salvar em um ENV 


function getAlphabetInArray() {
    $alfabetoInString = "A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
    $alfabetoInArray = explode(",", $alfabetoInString);

    return $alfabetoInArray;
}

function localityOfLetters(string $palavraSegredo) {

    $alfabetoInArray = getAlphabetInArray();
    $posicoesLetrasCorrespondentesArray = [];
    $arrayPalavraSegredo = str_split($palavraSegredo);

    for ($i = 0; $i < count($arrayPalavraSegredo); $i++) {
        for ($j = 0; $j < count($alfabetoInArray); $j++) {
            if ($alfabetoInArray[$j] == $arrayPalavraSegredo[$i]) {
                $posicoesLetrasCorrespondentesArray[] = array_search("$arrayPalavraSegredo[$i]", $alfabetoInArray);
            }
        }
    }
    return $posicoesLetrasCorrespondentesArray;
}

/*
print_r(localityOfLetters($palavraSegredo)) - TESTE PARA VALIDAR SE ESTAVAM SENDO CONTADO CORRETEMENTE AS POSIÇÕES DA LETRA DE ACORDO COM O ALFABETO. 
ex.
A == 0 
B == 1
...
*/


function applyCryptography(array $posicoesLetrasCorrespondentesArray) {

    for ($i = 0; $i < count($posicoesLetrasCorrespondentesArray); $i++) {
        $number = $posicoesLetrasCorrespondentesArray[$i];
        $posicoesLetrasCorrespondentesArrayCrytography[] = $number + $indice;
    }
    return $posicoesLetrasCorrespondentesArrayCrytography;
}

$posicoesPosIndice = calculatePosIndice($posicoes);


$arrayNewPalavra = [];
foreach ($posicoesPosIndice as $posicaoLetra) {
    //for ($i=0;$i < count($arrayAlfabeto);$i++){
    $arrayNewPalavra[] = $alfabetoInArray[$posicaoLetra];
    //}
}
print_r($arrayNewPalavra);
