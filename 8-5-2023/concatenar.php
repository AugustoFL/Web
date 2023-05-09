<!DOCTYPE html>
<html>
    <head>
        <title>Concatenar Palavras</title>
    </head>
<body>
    <form method="post" action="">
        <label for="palavras"> Digite algumas coisas que gosta de fazer separadas por vírgula: </label><br>
        <input type="text" id="palavras" name="palavras"><br>
        <input type="submit" value="Enviar">
</form>
<?php
//Função que recebe um array de palavras e retorna uma string com as palavras separadas por vírgulas e um "e" antes da última palavra
function concatenarPalavras($array)
{
    $tamanho = count($array);
    $string = "";
    for ($i = 0; $i < $tamanho - 1; $i++)
    {
        if ($i == $tamanho - 2)
        {
        $string .= $array[$i] . " e ";
        }
        else
        {
            $string .= $array[$i] . ", ";
        }
    }
    $string .= $array[$tamanho - 1];
    return $string;
}
// Verifica se o formulario foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $palavras = explode("," , $_POST["palavras"]);
    $frase = concatenarPalavras($palavras);
    echo "<p>Eu gosto de " . $frase . "</p>";
}
?>
</body>
</html>