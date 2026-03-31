<?php 
    $questao2 = $_POST["questao2"] ?? "";
    session_start();
    $_SESSION["questao2"] = $questao2;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>3. Condicional</h3>
<h4>Qual será a saída</h4>

        <?php
            $nome_imagem = "Quest3.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
   

        <form action="quest4.php" method="POST">
        <label>
            <input type="radio" name="questao3" value="quest1"> A) Ímpar
        </label>

        <label>
            <input type="radio" name="questao3" value="quest2"> B) Par
        </label>

        <label>
            <input type="radio" name="questao3" value="quest3"> C) Erro
        </label>

        <label>
            <input type="radio" name="questao3" value="quest4"> D) Nada
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
</div>
</body>
</html>