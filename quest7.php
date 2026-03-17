<?php 
    $questao6 = $_POST["questao6"] ?? "";
    session_start();
    $_SESSION["questao6"] = $questao6;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest8.php" method="$_POST">
        <h3>7. Condição composta</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao7" value="quest1"> A) OK
        </label>

        <label>
            <input type="radio" name="questao7" value="quest2"> B) Erro

        <label>
            <input type="radio" name="questao7" value="quest3"> C) Nada
        </label>

        <label>
            <input type="radio" name="questao7" value="quest4"> D) Depende
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>