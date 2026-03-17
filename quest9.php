<?php 
    $questao8 = $_POST["questao8"] ?? "";
    session_start();
    $_SESSION["questao8"] = $questao8;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest10.php" method="$_POST">
        <h3>9. Lógica</h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao9" value="quest1"> A) 6
        </label>

        <label>
            <input type="radio" name="questao9" value="quest2"> B) 8

        <label>
            <input type="radio" name="questao9" value="quest3"> C) 9
        </label>

        <label>
            <input type="radio" name="questao9" value="quest4"> D) 5
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>