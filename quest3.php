<?php 
    $questao2 = $_POST["questao2"] ?? "";
    session_start();
    $_SESSION["questao2"] = $questao2;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest4.php" method="$_POST">
        <h3>3. Condicional</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao3" value="quest1"> A) Ímpar
        </label>

        <label>
            <input type="radio" name="questao3" value="quest2"> B) Par
        </label>

        <label>
            <input type="radio" name="questao3" value="quest3"> C) Erro
        </label>

        <label>
            <input type="radio" name="questao3" value="quest4"> D) Nada
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>