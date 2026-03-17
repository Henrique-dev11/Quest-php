<?php 
    $questao4 = $_POST["questao4"] ?? "";
    session_start();
    $_SESSION["questao4"] = $questao4;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest6.php" method="$_POST">
        <h3>5. Soma acumulada</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao5" value="quest1"> A) 3
        </label>

        <label>
            <input type="radio" name="questao5" value="quest2"> B) 6

        <label>
            <input type="radio" name="questao5" value="quest3"> C) 2
        </label>

        <label>
            <input type="radio" name="questao5" value="quest4"> D) 0
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>