# 🔐 Cifra de César em PHP

Este projeto é uma implementação da clássica **Cifra de César**,
desenvolvida durante uma aula de Segurança da Informação com o objetivo
de aplicar conceitos básicos de criptografia na prática.

## 📚 Sobre a Cifra de César

A Cifra de César é uma técnica de criptografia por substituição onde
cada letra da mensagem é deslocada um número fixo de posições no
alfabeto.

Exemplo com deslocamento **3**:

Texto original: ABC\
Texto cifrado: DEF

## 🚀 Tecnologias Utilizadas

-   PHP\
-   Estruturas de repetição\
-   Arrays\
-   Funções

## ⚙️ Como funciona o código

O algoritmo segue os seguintes passos:

1.  Define um alfabeto de A a Z.\
2.  Converte a palavra em um array de caracteres.\
3.  Localiza a posição de cada letra no alfabeto.\
4.  Aplica o deslocamento definido pela constante `indice`.\
5.  Gera uma nova palavra com as letras cifradas.

## ▶️ Como executar

1.  Certifique-se de ter o **PHP** instalado:

php -v

2.  Salve o arquivo como:

cifra.php

3.  Execute no terminal:

php cifra.php

## 🔧 Personalização

Para alterar o deslocamento da cifra, modifique a constante:

``` php
const indice = 5;
```

Para mudar a palavra a ser cifrada:

``` php
$palavra = "TENTAADIVINHARAI";
```

## 🎯 Objetivo Educacional

Este projeto foi criado para fins acadêmicos, visando:

-   Compreender conceitos básicos de criptografia\
-   Exercitar lógica de programação\
-   Trabalhar com manipulação de arrays em PHP

## 📌 Melhorias Futuras

-   Implementar decifragem\
-   Permitir entrada de dados pelo usuário\
-   Tratar caracteres especiais e espaços\
-   Melhorar a estrutura do código (refatoração)\
-   Criar uma interface web simples

## 👨‍💻 Autor

Projeto desenvolvido para fins de estudo em Segurança da Informação/PHP.
