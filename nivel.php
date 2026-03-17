<?php
	$nome = $_POST ["nome"] ?? "";
    $sobrenome = $_POST["sobrenome"] ?? "";
	session_start();
	$_SESSION["nome"] = $nome;
    $_SESSION["sobrenome"] = $sobrenome;
?>

<html lang="pt">
	<head>
		<title>Quest Dev</title>

		<link rel="stylesheet" href="css/style.css">
	</head>
<body>

    
    <form  action="quest1.php" method="$_POST" >
        <h3>Qual é seu nível de programação?</h3>    
            <label>
                <input type="radio" name="nivel" value="Baixo"> Baixo
            </label>

            <lebel>
                <input type="radio" name="nivel" value="Medio"> Médio
            </lebel>

            <label>
                <input type="radio" name="nivel" value="Alto"> Alto
            </label>

            <p> <input type="submit" value="Proximo"> </p>
	</form>
</body>
</html>