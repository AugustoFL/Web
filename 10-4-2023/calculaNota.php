<!DOCTYPE html>
<html>
    <head>
        <title>Calcula Nota</title>
    </head>
<body>
    <h1>Calcula Nota</h1>
    <form method="post" action="">
        <form method="post" action="">
            <label>Nota 1: </label>
            <input type="text" name="n1" required><br><br>
            <label>Nota 2: </label>
            <input type="text" name="n2" required><br><br>
            <input type="submit" value="Calcular">
        </form>
        <br><br>
        </body>
        </html>

<?php
        //Capturando a entrada do Form HTML
        $string1 = $_POST['n1'];
        //Tratando a entrada para maiuscula
        $string1 = strtoupper($string1);
        //Capturando a entrada do form HTML2
        $string2 = $_POST['n2'];
        //Tratando a entrada para maiuscula2
        $string2 = strtoupper($string2);
        //Testando as notas digitadas pelo usuario
        if ($string1 == $string2){
            //Apresentando o resultado
            echo "<h2>Sua nota é: ". $string1. "</h2>";
        }
        //Testando as notas digitadas pelo usuario2
        if (($string1 == "B") && $string1 == $string2){
            //Apresentando o resultado2
            echo "<br><h2> Sua nota é: B</h2>";
        }
        //Testando as notas digitadas pelo usuario3
        if ($string1 == "MB" && $string2 == "B"){
            //Apresentando o resultado3
            echo "<br><h2>Sua nota é B </h2>";
        }
        //Testando as notas digitadas pelo usuario4
        if ($string1 == "MB" && $string2 == "R"){
            //Apresentando o resultado4
            echo "<br><h2> Sua nota é B </h2>";
        }
        //Testando as notas digitadas pelo usuario5
        if ($string1 == "MB" && $string2 == "I"){
            //Apresentando o resultado5
            echo "<br><h2> Sua nota é R </h2>";
        }
        //Testando as notas digitadas pelo usuario6
        if ($string1 == "B" && $string2 == "I"){
            //Apresentando o resultado6
            echo "<br><h2> Sua nota é R </h2>";
        }
        //Testando as notas digitadas pelo usuario7
        if ($string1 == "R" && $string2 == "I"){
            //Apresentando o resultado7
            echo "<br><h2> Sua nota é I </h2>";
        }
  