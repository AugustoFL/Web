<?php
// Função que recebe um array de números e retorna o maior valor
function obterMaiorValor($array)
{
    $maior = $array[0];
    foreach ($array as $valor)
    {
        if ($valor > $maior)
        {
            $maior = $valor;
        }
    }
    return $maior;
}
//Exemplo de uso da função
$numeros = [10, 5, 8, 20, 3];
$maiorValor = obterMaiorValor($numeros);
echo "O maior valor é: " . $maiorValor;
//Neste exemplo, a função obterMaiorValor() recebe um array de números