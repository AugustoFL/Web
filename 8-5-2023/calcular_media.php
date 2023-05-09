<?php

// Função que recebe um array e retorna a média dos valores
function calcularMedia($array){
    $soma = array_sum($array);
    $tamanho = count($array);
    return $soma / $tamanho;
}
// Exemplo de uso da função
$preco = [7.5, 8.0, 6.5, 9.0, 7.0, 6.5, 8];
$media = calcularMedia($preco);
echo "A média dos preços é: " . $media;

/* Neste exemplo, a função calcularMedia() recebe um array de números com argumentos e retorna
a média dos valores contidos nesse array. A função usa duas funções internas do PHP: array_sum()
para somar os valores do array e count() para obter o tamanho do array. Depois que a função calcula
a média, ela a retorna para o programa principal, que a armazena em uma variável $media. Finalmente,
o programa exibe a média com a função echo. */ 