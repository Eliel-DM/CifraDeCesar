<?php

$palavraSegredo = "AAA"; // Salvar em um ENV 

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

const INDICE = 5; // Adicionar a um arquivo ENV;

function applyCryptography($posicoesLetrasCorrespondentesArray) {
    $posicoesLetrasCorrespondentesArrayCryptography = [];

    foreach ($posicoesLetrasCorrespondentesArray as $posicaoLetra) {
        $posicoesLetrasCorrespondentesArrayCryptography[] = $posicaoLetra + INDICE;
    }
    return $posicoesLetrasCorrespondentesArrayCryptography;
}


/*
print_r(applyCryptography(localityOfLetters($palavraSegredo)));  - TESTANDO A FUNCIONALIDADE DA CRIPTOGRAFIA DE FATO. OPERANDO NORMALMENTE.
ex.
A == 0 
B == 1
...
*/

// Ainda precisa criar uma função principal para retornar a String já completamente corrigida com a criptografia. Também criar uma função