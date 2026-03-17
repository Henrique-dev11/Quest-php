<?php 
    $questao9 = $_POST["questao9"] ?? "";
    session_start();
    $_SESSION["questao9"] = $questao9;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="relatorio.php" method="$_POST">
        <h3>10. Comparação</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao10" value="quest1"> A) TRUE
        </label>

        <label>
            <input type="radio" name="questao10" value="quest2"> B) FALSE

        <label>
            <input type="radio" name="questao10" value="quest3"> C) ERRO
        </label>

        <label>
            <input type="radio" name="questao10" value="quest4"> D) None
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>