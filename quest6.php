<?php 
    $questao5 = $_POST["questao5"] ?? "";
    session_start();
    $_SESSION["questao5"] = $questao5;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
        <form action="quest7.php" method="$_POST">
        <h3>6. Lista </h3>
            <h4>Qual será a saída</h4>

        <label>
            <input type="radio" name="questao6" value="quest1"> A) 2
        </label>

        <label>
            <input type="radio" name="questao6" value="quest2"> B) 4

        <label>
            <input type="radio" name="questao6" value="quest3"> C) 6
        </label>

        <label>
            <input type="radio" name="questao6" value="quest4"> D) Erro
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</body>
</html>