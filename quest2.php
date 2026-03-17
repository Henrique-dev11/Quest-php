<?php 
    $questao = $_POST["questao"] ?? "";
    session_start();
    $_SESSION["questao"] = $questao;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest3.php" method="$_POST">
        <h3>2. Operador módulo (%)</h3>
            <h4>Qual será a saída?</h4>

        <label>
            <input type="radio" name="questao2" value="quest1"> A) 3
        </label>

        <label>
            <input type="radio" name="questao2" value="quest2"> B) 1 
        </label>

        <label>
            <input type="radio" name="questao2" value="quest3"> C) 0
        </label>

        <label>
            <input type="radio" name="questao2" value="quest4"> D) 10
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>