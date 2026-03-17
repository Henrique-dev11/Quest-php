<?php
	$nivel = $_POST ["nivel"] ?? "";
	session_start();
	$_SESSION["nivel"] = $nivel;

?>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>Quest Dev</title>
</head>
<body>
    <form action="quest2.php" method="$_POST">
        <h3>1. Soma de variáveis</h3>
        <h4>Qual será a saída do código?</h4>

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
    </form>
    
</body>
</html>