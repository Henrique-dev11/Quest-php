<?php 
    $questao9 = $_POST["questao9"] ?? "";
    session_start();
    $_SESSION["questao9"] = $questao9;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>10. Comparação</h3>
<h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest10.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
</div>
        <form action="gabarito.php" method="POST">


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
    </div>
</body>
</html>