<?php 
    $questao7 = $_POST["questao7"] ?? "";
    session_start();
    $_SESSION["questao7"] = $questao7;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>8. While loop</h3>
<h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest8.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
</div>
        <form action="quest9.php" method="POST">


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
    </div>
</body>
</html>