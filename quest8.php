<?php 
    $questao7 = $_POST["questao7"] ?? "";
    session_start();
    $_SESSION["questao7"] = $questao7;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest9.php" method="$_POST">
        <h3>8. While loop</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao8" value="quest1"> A) 1 2 3
        </label>

        <label>
            <input type="radio" name="questao8" value="quest2"> B) 0 1 2

        <label>
            <input type="radio" name="questao8" value="quest3"> C) 0 1 2 3
        </label>

        <label>
            <input type="radio" name="questao8" value="quest4"> D) Loop infinito
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>