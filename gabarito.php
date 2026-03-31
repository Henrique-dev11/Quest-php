<?php 
session_start();


if (isset($_POST["questao10"])) {
    $_SESSION["questao10"] = $_POST["questao10"];
}


$gabarito = [
    "questao"   => "quest2",   // Questão 1 → B) 8
    "questao2"  => "quest2",   // Questão 2 → B) 1
    "questao3"  => "quest2",   // Questão 3 → B) Par
    "questao4"  => "quest2",   // Questão 4 → B) 1 2 3
    "questao5"  => "quest2",   // Questão 5 → B) 3
    "questao6"  => "quest2",   // Questão 6 → B) 4
    "questao7"  => "quest2",   // Questão 7 → B) OK
    "questao8"  => "quest2",   // Questão 8 → B) 0 1 2
    "questao9"  => "quest2",   // Questão 9 → B) 6
    "questao10" => "quest2",   // Questão 10 → B) False
];

$acertos = 0;
$totalQuestao = count($gabarito);

// Conta os acertos
foreach ($gabarito as $chave => $respostaCorreta) {
    if (isset($_SESSION[$chave]) && $_SESSION[$chave] === $respostaCorreta) {
        $acertos++;
    }
}

// Pega os dados do usuário
$nome      = $_SESSION["nome"] ?? "Desenvolvedor";
$sobrenome = $_SESSION["sobrenome"] ?? "";
$nivel     = $_SESSION["nivel"] ?? "Não informado";

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado Final - Quest Dev</title>
</head>
<body>
    <div class="container">
    <div class="header">
        <img src="img/logo.png" alt="Logo Quest Dev" width="100" height="100">
        <h1><span class="texto-branco">Quest</span> DEV</h1>
    </div>
        <h1>Resultado do Quest Dev</h1>
        
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome . " " . $sobrenome); ?></p>
        <p><strong>Nível declarado:</strong> <?php echo htmlspecialchars($nivel); ?></p>
        
        <hr>
        
        <h2>Você acertou <strong><?php echo $acertos; ?></strong> de <strong><?php echo $totalQuestao; ?></strong> questões!</h2>
        
        <p>Porcentagem: <strong><?php echo round(($acertos / $totalQuestao) * 100, 1); ?>%</strong></p>
        
        <p><a href="index.php">Reiniciar Quiz</a></p>
    </div>
    
</body>
</html>