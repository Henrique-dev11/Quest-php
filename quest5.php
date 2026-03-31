<?php 
    $questao4 = $_POST["questao4"] ?? "";
    session_start();
    $_SESSION["questao4"] = $questao4;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
    <h3>5. Soma acumulada</h3>
    <h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest5.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">

        <form action="quest6.php" method="POST">


        <label>
            <input type="radio" name="questao5" value="quest1"> A) 6
        </label>

        <label>
            <input type="radio" name="questao5" value="quest2"> B) 3

        <label>
            <input type="radio" name="questao5" value="quest3"> C) 2
        </label>

        <label>
            <input type="radio" name="questao5" value="quest4"> D) 0
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</div>
</body>
</html>