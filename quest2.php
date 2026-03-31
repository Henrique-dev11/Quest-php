<?php 
    $questao = $_POST["questao"] ?? "";
    session_start();
    $_SESSION["questao"] = $questao;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>2. Operador módulo (%)</h3>
<h4>Qual será a saída?</h4>
<div>
        <?php
            $nome_imagem = "Quest2.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
    </div>

        <form action="quest3.php" method="POST">
        <label>
            <input type="radio" name="questao2" value="quest1"> A) 3
        </label>

        <label>
            <input type="radio" name="questao2" value="quest2"> B) 1 
        </label>

        <label>
            <input type="radio" name="questao2" value="quest3"> C) 0
        </label>

        <label>
            <input type="radio" name="questao2" value="quest4"> D) 10
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
    <div>
</body>
</html>