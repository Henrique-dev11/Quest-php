<?php 
    $questao8 = $_POST["questao8"] ?? "";
    session_start();
    $_SESSION["questao8"] = $questao8;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
<h3>9. Lógica</h3>
<h4>Qual será a saída</h4>
<div>
        <?php
            $nome_imagem = "Quest9.png";
            $pasta = "img/";
            $caminho_completo = $pasta . $nome_imagem;
        ?>
        <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">
</div>
        <form action="quest10.php" method="POST">


        <label>
            <input type="radio" name="questao9" value="quest1"> A) 8
        </label>

        <label>
            <input type="radio" name="questao9" value="quest2"> B) 6

        <label>
            <input type="radio" name="questao9" value="quest3"> C) 9
        </label>

        <label>
            <input type="radio" name="questao9" value="quest4"> D) 5
        </label>

        <p> <input type="submit" value="Proximo"></p>
    </form>
    </div>
</body>
</html>