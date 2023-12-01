<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php

include_once 'jokenpo.php';

$resultado = new ResultadoJKP;

$resultado -> setNome ($_POST['nome']);

$resultado -> setEscolha ($_POST['escolha']);

$resultado -> mostrarResultado();

?>  
</body>
</html>