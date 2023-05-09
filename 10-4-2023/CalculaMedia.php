<!DOCTYPE html>
<html>
    <head>
        <title> Calcula Media</title>
    </head>
    <body>
        <h1>Calcula Media</h1>
        <form method="post" action="">
            <label>Numero 1:</label>
            <input type="number" name="n1" required><br><br>
            <label>Numero 2:</label>
            <input type="number" name="n2" required><br><br>
            <label>Numero 3</label>
            <input type="number" name="n3" required><br><br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
        <?php
        //Em PHP, a função isset () é usada para verificar se uma variavel esta definida e nao é null
        if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])){

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            $media = ($n1 + $n2 + $n3)/3;

            echo "<br><h2>A media é: ". $media . "</h2>";
        }
        ?>