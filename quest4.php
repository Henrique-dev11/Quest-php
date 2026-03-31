<?php 
    $questao3 = $_POST["questao3"] ?? "";
    session_start();
    $_SESSION["questao3"] = $questao3;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
    <h3>4. Loop for</h3>
    <h4>Qual será a saída</h4>
        <?php
            $nome_imagem = "Quest4.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">

        <form action="quest5.php" method="POST">
        <label>
            <input type="radio" name="questao4" value="quest1"> A) 0 1 2 3
        </label>

        <label>
            <input type="radio" name="questao4" value="quest2"> B) 1 2 3
        </label>

        <label>
            <input type="radio" name="questao4" value="quest3"> C) 1 2 3 4
        </label>

        <label>
            <input type="radio" name="questao4" value="quest4"> D) 0 1 2
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</div>
</body>
</html>