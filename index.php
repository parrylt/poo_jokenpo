<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jokenpô</title>
</head>
<body>


  <h1>Jokenpô contra o Computador</h1>
<form action="resultado.php" method="post">
  <label>Jogue aí o jokenpô e informe o seu nome</label>
	<br><br>
	<input type="text" name="nome" size="20" placeholder="Nome" required/><br><br>
            <select name="escolha" required>
                <option disabled selected value=""></option>
                <option value="Pedra">Pedra</option>
                <option value="Papel">Papel</option>
                <option value="Tesoura">Tesoura</option>
            </select><br><br>
  <input type="submit" value="Jogar">
  <hr>
</form>


</body>
</html>