<?php 
    $questao5 = $_POST["questao5"] ?? "";
    session_start();
    $_SESSION["questao5"] = $questao5;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>6. Lista </h3>
<h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest6.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">

        <form action="quest7.php" method="POST">


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
    </div>
</body>
</html>