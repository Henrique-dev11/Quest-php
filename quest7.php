<?php 
    $questao6 = $_POST["questao6"] ?? "";
    session_start();
    $_SESSION["questao6"] = $questao6;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>7. Condição composta</h3>
<h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest7.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
</div>
        <form action="quest8.php" method="POST">


        <label>
            <input type="radio" name="questao7" value="quest1"> A) Erro
        </label>

        <label>
            <input type="radio" name="questao7" value="quest2"> B) OK

        <label>
            <input type="radio" name="questao7" value="quest3"> C) Nada
        </label>

        <label>
            <input type="radio" name="questao7" value="quest4"> D) Depende
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
    </div>
</body>
</html>