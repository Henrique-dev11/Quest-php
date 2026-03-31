<?php
	$nivel = $_POST ["nivel"] ?? "";
	session_start();
	$_SESSION["nivel"] = $nivel;

?>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Quest Dev</title>
</head>
<body>
<div class="container">
    <h3>1. Soma de variáveis</h3>
    <h4>Qual será a saída do código?</h4>      
            <?php
                $nome_imagem = "Quest1.png";
                $pasta = "img/";
                $caminho_completo = $pasta . $nome_imagem;
            ?>
            <img src="<?php echo $caminho_completo; ?>" alt="Imagem Dinâmica">


    <form action="quest2.php" method="POST">
        
        <label>
            <input type="radio" name="questao" value="quest1"> A) 53
        </label>

        <label>
            <input type="radio" name="questao" value="quest2"> B) 8
        </label>

        <label>
            <input type="radio" name="questao" value="quest3"> C) 15
        </label>

        <label>
            <input type="radio" name="questao" value="quest4"> D) Erro
        </label>

        <p> <input type="submit" value="Proximo"></p>
        </div>
    </form>
    </div>

    
</body>
</html>