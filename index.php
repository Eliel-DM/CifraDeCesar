<?php

$palavraSegredo = "AAA"; // Salvar em um ENV 

function getAlphabetInArray() {
    $alfabetoInString = "A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
    $alfabetoInArray = explode(",", $alfabetoInString);

    return $alfabetoInArray;
}

function mainFunctionCipher(string $palavraSegredo) {

    $posicoesLetrasCorrespondentesArray = [];
    $posicoesLetrasCorrespondentesArrayCryptography = [];

    $alfabetoInArray = getAlphabetInArray();
    $arrayPalavraSegredo = str_split($palavraSegredo);

    for ($i = 0; $i < count($arrayPalavraSegredo); $i++) {
        for ($j = 0; $j < count($alfabetoInArray); $j++) {
            if ($alfabetoInArray[$j] == $arrayPalavraSegredo[$i]) {
                $posicoesLetrasCorrespondentesArray[] = array_search("$arrayPalavraSegredo[$i]", $alfabetoInArray);
            }
        }
    }

    $INDICE = 1; // Adicionar a um arquivo ENV;


    foreach ($posicoesLetrasCorrespondentesArray as $posicaoLetra) {
        $posicoesLetrasCorrespondentesArrayCryptography[] = $alfabetoInArray[$posicaoLetra + $INDICE];
    }

    $palavraSegredoCrifrada = implode("", $posicoesLetrasCorrespondentesArrayCryptography);

    return $palavraSegredoCrifrada;
}


$teste = mainFunctionCipher($palavraSegredo);
echo $teste;

/*
print_r(applyCryptography(localityOfLetters($palavraSegredo)));  - TESTANDO A FUNCIONALIDADE DA CRIPTOGRAFIA DE FATO. OPERANDO NORMALMENTE.
ex.
A == 0 
B == 1
...
*/

// Ainda precisa criar uma função principal para retornar a String já completamente corrigida com a criptografia. Também criar uma função;